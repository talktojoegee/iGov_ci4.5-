<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Employee;
use App\Models\Registry;
use App\Models\UserModel;
use App\Models\UserPermissions;

class Auth extends BaseController
{
    public function __construct()
    {
        //Do your magic here
        $this->user = new UserModel();
        $this->registry = new Registry();
        $this->permission = new UserPermissions();
        $this->employee = new Employee();
    }

    public function login()
    {

        $data = [];

        if ($this->request->getMethod() == 'POST'):


            $rules = [
                'username' => [
                    'rules' => 'required',
                    'label' => 'Email address',
                    'errors' => [
                        'required' => 'username/email is compulsory',

                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'label' => 'Password',
                    'errors' => [
                        'required' => 'Enter your registered password'

                    ]
                ]
            ];
            if ($this->validate($rules)):

                $username = $this->request->getVar('username');
                $password = $this->request->getVar('password');

                $url = $this->request->getVar('url');
                $data = $this->user->where('user_username', $username)
                    ->orWhere('user_email', $username)
                    ->first();
                $permissions = $this->permission->viewUserPermissions($data['user_id']);
                if ($data):
                    $user_status = $data['user_status'];

                    if ($user_status == 1):
                        $pass = $data['user_password'];
                        $verify_password = password_verify($password, $pass);
                        if ($verify_password):
                            $employee = $this->employee->find($data['user_employee_id']);
                            $ses_data = array(
                                'user_id' => $data['user_id'],
                                'user_employee_id' => $data['user_employee_id'],
                                'user_email' => $data['user_email'],
                                'user_username' => $data['user_username'],
                                'avatar' => !empty($employee) ? $employee['employee_avatar'] :  'avatar.png',
                                'full_name' => !empty($employee) ? $employee['employee_f_name'].' '.$employee['employee_l_name'] :  'N/A',
                                //'position' => !empty($employee) ? $employee['employee_f_name'].' '.$employee['employee_l_name'] :  'N/A',
                                'user_name' => $data['user_name'],
                                'has_registry_access' => $this->_check_registry_access($data['user_id']),
                                'position'=> !empty($employee) ? $employee['employee_position_id'] :  0,
                                'isLoggedIn' => true,
                                'firstTime' => true,
                                'type' => $data['user_type'],
                                'permissions' => $permissions,
                            );
                            $this->session->set($ses_data);
                            $type = $data['user_type'];
                            if ($type == 2):
                                return redirect()->to('/');
                            endif;
                            if ($type == 1):
                                return redirect()->to('admin');
                            endif;
                            if ($type == 3):
                                return view('auth/moderator', $data);
                            endif;
                        endif;
                        $data['errors'] = 'Wrong authentication details';
                        $data['url'] = '';
                        return view('auth/login', $data);
                    else:
                        $data['errors'] = 'Wrong authentication details';
                        $data['url'] = '';
                        return view('auth/login', $data);
                    endif;
                else:
                    $data['errors'] = 'Wrong authentication details';
                    $data['url'] = '';
                    return view('auth/login', $data);
                endif;
            else:
                $data['validation'] = $this->validator;
                $data['url'] = '';
                $data['errors'] = '';
                return view('auth/login', $data);
            endif;
        endif;

        if ($this->request->getMethod() == 'GET'):

            $data['url'] = '';
            $data['errors'] = '';
            return view('auth/login', $data);

        endif;
    }

    public function register()
    {
        $user = array(
            'user_name' => 'Administrator',
            'user_password' => 'password1234',
            'user_username' => 'administrator',
            'user_email' => 'admin@admin.co',
            'user_phone' => '08090000000',
            'user_employee_id' => '',
            'user_type' => 3,
            'user_status' => 1
        );

        $this->user->save($user);

    }


    public function moderator()
    {

        if ($this->request->getMethod() == 'GET'):

            $data['url'] = '';
            return view('auth/moderator', $data);

        endif;
    }

    public function a_register()
    {
        $user = array(
            'user_name' => 'test test',
            'user_password' => 'password1234',
            'user_email' => 'admin@admin.co',
            'user_phone' => '08090000000',

            'user_status' => 1
        );

        $this->user->save($user);

    }


    public function logout()
    {

        $this->session->destroy();
        return redirect()->to('/login');
    }

    private function _check_registry_access($user_id)
    {
        $registries = $this->registry->where('registry_status', 1)->findAll();
        foreach ($registries as $registry) {
            $registry_users = json_decode($registry['registry_users']);
            if (in_array($user_id, $registry_users)) {
                return true;
            }
        }
        return false;
    }

}
