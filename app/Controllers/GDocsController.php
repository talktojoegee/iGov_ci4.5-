<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Enums\Permissions;
use App\Models\Employee;
use App\Models\GDoc;
use App\Models\GDocAuthorizers;
use App\Models\GDocAuthorizersLogs;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Database;

class GDocsController extends BaseController
{
    public function __construct()
    {
        if (session()->get('type') == 1):
            echo view('auth/access_denied');
            exit;
        endif;

        $this->g_doc = new GDoc();
        $this->g_doc_authorizers = new GdocAuthorizers();
        $this->g_doc_authorizers_logs = new GdocAuthorizersLogs();
        $this->employee = new Employee();
    }

    public function index()
    {
        $data['firstTime'] = $this->session->firstTime;
        $data['username'] = $this->session->user_username;
        $data['my_docs'] = $this->g_doc_authorizers->getGDocAuthorizationsByUserId($this->session->user_id);
        return view('/pages/g-doc/index', $data);
    }

    public function get_new_document_upload()
    {
        $data['firstTime'] = $this->session->firstTime;
        $data['username'] = $this->session->user_username;
        $data['hods'] = $this->_group_all_department_hods();
        return view('/pages/g-doc/new_document_upload', $data);
    }

    public function post_new_document_upload()
    {
        $ref = $this->request->getPost('g_doc_ref');
        $title = $this->request->getPost('g_doc_title');
        $comment = $this->request->getPost('g_doc_comment');
        $authorizers = $this->request->getPost('authorizers');
        $file = $this->request->getFile('file');
        if (empty($file) || !$file->isValid()) {
            $response['success'] = false;
            $response['message'] = 'An error occurred while setting up your E-Signature.';
            return $this->response->setJSON($response);
        }

        $db = Database::connect();
        $db->transStart();
        try {
            $file_name = $file->getRandomName();
            $file->move('uploads/g-docs', $file_name);

            $g_doc_data = [
                'g_doc_ref' => $ref,
                'g_doc_title' => $title,
                'g_doc_comment' => $comment,
                'g_doc_uploaded_by' => session()->user_id,
                'g_doc_last_status_update_by' => session()->user_id,
                'g_doc_upload' => $file_name,
            ];
            $g_doc_id = $this->g_doc->insert($g_doc_data);

            foreach ($authorizers as $userId) {
                $gDocAuthorizerData = [
                    'g_doc_auth_doc_id' => $g_doc_id,
                    'g_doc_auth_user_id' => $userId,
                    'g_doc_auth_status' => 0,
                    'g_doc_auth_status_at' => date('Y-m-d H:i:s'),
                ];
                $this->g_doc_authorizers->insert($gDocAuthorizerData);
            }

            $db->transComplete();
            if ($db->transStatus() === false) {
                $db->transRollback();
                $response['success'] = false;
                $response['message'] = 'An error occurred while uploading document. status false';
            } else {
                $response['success'] = true;
                $response['message'] = 'Document uploaded successfully.';
                $response['doc_id'] = $g_doc_id;
            }
            return $this->response->setJSON($response);

        } catch (\Exception $e) {
            $db->transRollback();
            $response['success'] = false;
            $response['message'] = 'An error occurred while uploading document.' . $e->getMessage();
            log_message('error', 'POST NEW DOCUMENT UPLOAD ERROR: ' . $e->getMessage());
            return $this->response->setJSON($response);
        }

    }

    public function get_manage_document($g_doc_id)
    {
        $doc = $this->g_doc->getDocById($g_doc_id);
        if (!$doc) return view('pages/error_404');

        $data['firstTime'] = $this->session->firstTime;
        $data['username'] = $this->session->user_username;
        $data['doc'] = $doc;
        $data['hods'] = $this->_group_remaining__department_hods($doc['authorizers']);
        return view('/pages/g-doc/manage_document', $data);
    }

    public function save_doc_changes()
    {
        $g_doc_id = $this->request->getPost('g_doc_id');
        $file = $this->request->getFile('file');
        $doc = $this->g_doc->find($g_doc_id);
        if (!$doc) {
            $response['success'] = false;
            $response['message'] = 'An error occurred while saving document changes.';
            return $this->response->setJSON($response);
        }
        if ($file->isValid() && !$file->hasMoved()) {
            $newFileName = $file->getRandomName();
            $filename = $doc['g_doc_upload'];
            $path = 'uploads/g-docs/' . $filename;
            if (file_exists($path)) {
                unlink($path);
            }
            $file->move('uploads/g-docs', $newFileName);

            $this->g_doc->update($g_doc_id, ['g_doc_upload' => $newFileName]);

            $response['success'] = true;
            $response['message'] = 'Changes saved successfully.';
        } else {
            $response['success'] = false;
            $response['message'] = 'An error occurred while saving document changes.';
        }
        return $this->response->setJSON($response);
    }

    public function patch_manage_document($g_doc_id)
    {
        $user_id = session()->user_id;
        $doc = $this->g_doc->find($g_doc_id);
        if (!$doc) {
            $response['success'] = false;
            $response['message'] = 'An error occurred updating document details.';
            return $this->response->setJSON($response);
        }
        $authorizers = $this->request->getPost('authorizers');
        $final_review = $this->request->getPost('final_review');
        if ($authorizers) {
            foreach ($authorizers as $userId) {
                $gDocAuthorizerData = [
                    'g_doc_auth_doc_id' => $g_doc_id,
                    'g_doc_auth_user_id' => $userId,
                    'g_doc_auth_status' => 0,
                    'g_doc_auth_status_at' => date('Y-m-d H:i:s'),
                ];
                $this->g_doc_authorizers->insert($gDocAuthorizerData);
            }
        }

        if ($final_review) {
            $g_doc_auth = $this->g_doc_authorizers->where([
                'g_doc_auth_doc_id' => $g_doc_id,
                'g_doc_auth_user_id' => $user_id
            ])->first();

            $this->g_doc_authorizers->update($g_doc_auth['g_doc_auth_id'],
                [
                    'g_doc_auth_status' => 2,
                    'g_doc_auth_status_at' => date('Y-m-d H:i:s')
                ]
            );
        }
        $response['success'] = true;
        $response['message'] = 'Changes saved successfully.';
        return $this->response->setJSON($response);
    }


    private function _group_all_department_hods()
    {
        $grouped_hods = [];
        $employees = $this->employee->getAllEmployeesWithPermission(Permissions::HOD->value);
        foreach ($employees as $employee) {
            $department_name = $employee['dpt_name'];
            if (!isset($grouped_hods[$department_name])) {
                $grouped_hods[$department_name] = [];
            }
            $grouped_hods[$department_name][] = $employee;
        }
        return $grouped_hods;
    }

    private function _group_remaining__department_hods($authorizers)
    {
        $grouped_hods = [];
        $g_doc_auth_user_ids = array_column($authorizers, 'g_doc_auth_user_id');
        $employees = $this->employee->getAllEmployeesWithPermission(Permissions::HOD->value);
        foreach ($employees as $employee) {
            if (in_array($employee['user_id'], $g_doc_auth_user_ids)) {
                continue;
            }

            $department_name = $employee['dpt_name'];
            if (!isset($grouped_hods[$department_name])) {
                $grouped_hods[$department_name] = [];
            }
            $grouped_hods[$department_name][] = $employee;
        }
        return $grouped_hods;
    }
}
