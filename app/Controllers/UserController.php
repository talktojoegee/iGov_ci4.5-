<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Enums\Permissions;
use App\Models\Employee;
use App\Models\Organization;
use App\Models\UserModel;
use App\Models\UserPermissions;
use CodeIgniter\HTTP\ResponseInterface;
use mysql_xdevapi\Exception;

class UserController extends BaseController
{
    public function __construct()
    {
        if (session()->get('type') == 2):
            echo view('auth/access_denieda');
            exit;
        endif;

        $this->user_model = new UserModel();
        $this->organization = new Organization();
        $this->permission_model = new UserPermissions();
        $this->employee_model = new Employee();
    }

    public function user_permissions()
    {
        $data['firstTime'] = $this->session->firstTime;
        $data['username'] = $this->session->user_username;
        $users = $this->user_model->getAllUsers();
        foreach ($users as &$user) {
            $user['permissions'] = $this->permission_model->viewUserPermissions($user['user_id']);
            $user['employee'] = $this->employee_model->getEmployeeDetailsByUserEmployeeId($user['user_employee_id']);
        }
        $data['users'] = $users;
        $data['permissions'] = Permissions::all_permissions();
        return view('office/user-permissions', $data);
    }

    public function modify_user_permissions()
    {
        try {
            $submitted_permissions = $this->request->getPost('permissions');
            $user_id = $this->request->getPost('user_id');

            $user_permissions = $this->permission_model->getPermissionsByUserId($user_id);
            $existing_permissions = array_column($user_permissions, 'permission');

            $permissions_to_delete = array_diff($existing_permissions, $submitted_permissions);
            $permissions_to_add = array_diff($submitted_permissions, $existing_permissions);

            if (!empty($permissions_to_delete)) {
                $this->permission_model
                    ->where('user_id', $user_id)
                    ->whereIn('permission', $permissions_to_delete)->delete();
            }

            if (!empty($permissions_to_add)) {
                $data_to_add = [];
                foreach ($permissions_to_add as $permission_to_add) {
                    $data_to_add[] = [
                        'user_id' => $user_id,
                        'permission' => $permission_to_add
                    ];
                }
                $this->permission_model->insertBatch($data_to_add);
            }

            if ($user_id === $this->session->user_id) {
                $permissions = $this->permission_model->viewUserPermissions($user_id);

                $this->session->remove('permissions');
                $this->session->push('permissions', $permissions);
            }

            $this->session->setFlashData('success', 'Permissions updated successfully.');

        } catch (Exception $exception) {
            log_message('Modify User Permission Error', $exception->getMessage());
        }

        return redirect()->to('permissions');
    }

    public function reset_password()
    {
        $user_id = $this->request->getGet('user_id');
        $new_password = $this->generateRandomString(12);
        log_message('info', "New password: $new_password, user_id: $user_id");
        $password_hash = password_hash($new_password, PASSWORD_BCRYPT);
        if ($this->user_model->update($user_id, ['user_password' => $password_hash])) {
            $user = $this->user_model->find($user_id);
            // send an email
            $from['name'] = 'IGOV by Connexxion Telecom';
            $from['email'] = 'support@connexxiontelecom.com';
            $to = $user['user_email'];
            $subject = 'Password Reset';
            $data['subject'] = $subject;
            $data['user'] = $user['user_name'];
            $data['password'] = $new_password;
            $organization = $this->organization->first();
            $data['organization'] = $organization['org_name'];
            $data['notification'] = 'Your password has been reset successfully: ' . $new_password . ' please, update it immediately.';
            $message = view('email/notification', $data);
            $this->send_mail($to, $subject, $message, $from);

            $this->session->setFlashData('success', 'Password reset successfully.');
        }

        return redirect()->to('permissions');
    }

    private function generateRandomString($length = 10)
    {
        // Characters to use in the random string
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
        $charactersLength = strlen($characters);
        $randomString = '';

        // Generate random string
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
