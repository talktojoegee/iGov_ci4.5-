<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Enums\Permissions;

class MemoController extends PostController
{
    public function memos($type = null)
    {

        $search_params = @$_GET['search_params'];
        $user_id = session()->get('user_id');
        $user_data = $this->user->where('user_id', $user_id)->first();
        $employee_id = $user_data['user_employee_id'];
        $employee_data = $this->employee->where('employee_id', $employee_id)->first();
        $position_id = $employee_data['employee_position_id'];
        $data['firstTime'] = $this->session->firstTime;
        $data['username'] = $this->session->user_username;
        if (empty($search_params)) {
            $unsigned_memos = $this->_get_unsigned_memos();
            $unreviewed_memos = $this->_get_unreviewed_memos();
            if ($unsigned_memos) session()->setFlashdata('unsigned_memos', true);
            if ($unreviewed_memos) session()->setFlashdata('unreviewed_memos', true);
            if ($type === 'requests') {
                $data['memos'] = $unsigned_memos;
                return view('/pages/posts/memos/signature-requests', $data);
            } else if ($type === 'reviews') {
                $data['memos'] = $unreviewed_memos;
                return view('/pages/posts/memos/review-requests', $data);
            }
            $data['memos'] = $this->_get_memos();
        } else {
            $data['memos'] = $this->_get_searched_memos($search_params);
        }
        $data['pager'] = $this->post->pager;
        $data['userId'] = $user_id;
        $data['stamps'] = $this->stamp->findAll();
        return view('/pages/posts/memos/index', $data);
    }

    public function internal_memo()
    {
        if ($this->request->getMethod() == 'GET'):
            if (!$this->_validate_permission(Permissions::MEMO->value)) {
                return view('auth/access_denied');
            }
            $data['department_employees'] = $this->_get_department_employees();
            $data['pager'] = $this->post->pager;
            $data['firstTime'] = $this->session->firstTime;
            $data['username'] = $this->session->user_username;
            $data['hods'] = $this->_group_all_department_hods();
            $data['department_hods'] = $this->_group_one_department_hods();
            $data['authUser'] = $this->employee->getEmployeeByUserEmployeeId($this->session->user_employee_id);
            if (empty($data['authUser'])) {
                return redirect()->back()->with("error", "<strong>Whoops!</strong> User record not found");
            }
            $data['authDirectorate'] = $this->department->find($data['authUser']['employee_department_id']);
            if (empty($data['authDirectorate'])) {
                return redirect()->back()->with("error", "<strong>Whoops!</strong> We had issues identifying your directorate.");
            }
            $data['counter'] = count($this->post->findAll()) + 1;
            //return dd($data);
            return view('/pages/posts/memos/new-internal-memo', $data);
        endif;
        $post_data = $this->request->getPost();
        $memo_data = [
            'p_ref_no' => $post_data['p_ref_no'],
            'p_subject' => $post_data['p_subject'],
            'p_type' => 1,
            'p_body' => $post_data['p_body'],
            'p_status' => 0,
            'p_by' => $this->session->user_id,
            'p_signed_by' => $post_data['p_signed_by'],
            'p_reviewers_id' => json_encode($post_data['p_reviewers_id']),
            'p_direction' => 1,
            'p_recipients_id' => json_encode($post_data['recipients'])
        ];
        $post_id = $this->post->insert($memo_data);
        if ($post_id) {
            if (isset($post_data['p_attachment'])) {
                $attachments = $post_data['p_attachment'];
                //$this->_uploadFiles($attachments, $post_id);
                $this->_upload_attachments($attachments, $post_id);
            }
            $this->send_notification('New Internal Memo Created', 'You created a new internal memo', $this->session->user_id, site_url('view-memo/') . $post_id, 'click to view memo');
            $this->send_notification('New Internal Memo Created', 'An internal memo was created. You are the signatory.', $post_data['p_signed_by'], site_url('view-memo/') . $post_id, 'click to view memo');
            foreach ($post_data['p_reviewers_id'] as $reviewer) {
                $this->send_notification(
                    'New Internal Memo Created',
                    'An internal memo was created. You are a reviewer',
                    $reviewer,
                    site_url('view-memo/') . $post_id,
                    'click to view memo'
                );
            }
            $response['success'] = true;
            $response['message'] = 'Successfully created the internal memo';
        } else {
            $response['success'] = false;
            $response['message'] = 'There was an error while creating the internal memo';
        }
        return $this->response->setJSON($response);
    }


    public function external_memo()
    {
        if ($this->request->getMethod() == 'GET'):
            $data['department_employees'] = $this->_get_department_employees();
            $data['positions'] = $this->position->findAll();
            $data['pager'] = $this->post->pager;
            $data['firstTime'] = $this->session->firstTime;
            $data['username'] = $this->session->user_username;
            return view('/pages/posts/memos/new-external-memo', $data);
        endif;
        $post_data = $this->request->getPost();
        $memo_data = [
            'p_ref_no' => $post_data['p_ref_no'],
            'p_subject' => $post_data['p_subject'],
            'p_type' => 1,
            'p_body' => $post_data['p_body'],
            'p_status' => 0,
            'p_by' => $this->session->user_id,
            'p_signed_by' => $post_data['p_signed_by'],
            'p_direction' => 2,
            'p_recipients_id' => $post_data['p_recipients']
        ];
        $post_id = $this->post->insert($memo_data);
        if ($post_id) {
            if (isset($post_data['m_attachments'])) {
                $attachments = $post_data['m_attachments'];
                $this->_upload_attachments($attachments, $post_id);
            }
            $this->send_notification('New External Memo Created', 'You created a new external memo', $this->session->user_id, site_url('view-memo/') . $post_id, 'click to view memo');
            $this->send_notification('New External Memo Created', 'An external memo was created. You are the signatory.', $post_data['p_signed_by'], site_url('view-memo/') . $post_id, 'click to view memo');
            $response['success'] = true;
            $response['message'] = 'Successfully created the external memo';
        } else {
            $response['success'] = false;
            $response['message'] = 'There was an error while creating the external memo';
        }
        return $this->response->setJSON($response);
    }

    protected function _uploadFiles($attachments, $post_id)
    {
        if (count($attachments) > 0) {
            foreach ($attachments as $attachment) {
                $attachment_data = array(
                    'pa_post_id' => $post_id,
                    'pa_link' => $attachment
                );
                $this->pa->save($attachment_data);
            }
        }
    }

    public function my_memos()
    {
        $data['firstTime'] = $this->session->firstTime;
        $data['username'] = $this->session->user_username;
        $data['memos'] = $this->_get_user_memos();
        return view('/pages/posts/memos/my-memos', $data);
    }

    public function view_memo($memo_id)
    {
        $data['firstTime'] = $this->session->firstTime;
        $data['username'] = $this->session->user_username;
        $data['memo'] = $this->_get_memo($memo_id);
        $data['stamps'] = $this->_get_official_stamps();
        //return dd($data);
        return view('/pages/posts/memos/view-memo', $data);
    }

    public function edit_memo($memo_id = null)
    {
        if ($this->request->getMethod() == 'GET') {
            $data['signed_by'] = $this->user->where('user_status', 1)
                ->groupStart()
                ->where('user_type', 2)
                ->orWhere('user_type', 3)
                ->groupEnd()
                ->findAll();
            $data['positions'] = $this->position->findAll();
            $data['firstTime'] = $this->session->firstTime;
            $data['username'] = $this->session->user_username;
            $data['memo'] = $this->_get_memo($memo_id);
            return view('/pages/posts/memos/edit-internal-memo', $data);
        }
        $post_data = $this->request->getPost();
        $memo_data = [
            'p_id' => $post_data['memo_id'],
            'p_ref_no' => $post_data['p_ref_no'],
            'p_subject' => $post_data['p_subject'],
            'p_body' => $post_data['p_body'],
            'p_signed_by' => $post_data['p_signed_by'],
            'p_recipients_id' => json_encode($post_data['positions'])
        ];
        if ($this->post->save($memo_data)) {
            $response['success'] = true;
            $response['message'] = 'Successfully edited the memo';
        } else {
            $response['success'] = false;
            $response['message'] = 'There was an error while editing the memo';
        }
        return $this->response->setJSON($response);
    }

    private function _get_memos()
    {
        $memos = $this->post
            ->where('p_status', 2)
            ->where('p_type', 1)
            ->orderBy('p_date', 'DESC')
            ->paginate(9);
        $new_memos = [];
        foreach ($memos as $memo) {
            $recipient_ids = json_decode($memo['p_recipients_id']);
            $recipients = [];
            if ($recipient_ids) {
                foreach ($recipient_ids as $recipient_id) {
                    $user = $this->user->getAllUserData($recipient_id);
                    array_push($recipients, $user);
                }
                if (in_array(session()->user_id, $recipient_ids) || $memo['p_signed_by'] == session()->user_id || $memo['p_by'] == session()->user_id) {
                    $memo['written_by'] = $this->user->getAllUserData($memo['p_by']);
                    $memo['signed_by'] = $this->user->getAllUserData($memo['p_signed_by']);
                    $memo['recipients'] = $recipients;
                    array_push($new_memos, $memo);
                }
            }
        }
        return $new_memos;
    }

    private function _get_unsigned_memos()
    {
        $memos = $this->post
            ->where('p_signed_by', $this->session->user_id)
            ->where('p_type', 1)
            ->where('p_status', 0)
            ->orderBy('p_date', 'DESC')
            ->findAll();


        foreach ($memos as $key => $memo) {
            $recipient_ids = json_decode($memo['p_recipients_id']);
            $recipients = [];
            if ($recipient_ids) {
                foreach ($recipient_ids as $recipient_id) {
                    $user = $this->user->getAllUserData($recipient_id);
                    array_push($recipients, $user);
                }
            } else {
                $external_recipients = explode("\n", $memo['p_recipients_id']);
                $memos[$key]['external_recipients'] = $external_recipients;
            }
            $memos[$key]['written_by'] = $this->user->getAllUserData($memo['p_by']);
            $memos[$key]['recipients'] = $recipients;
        }
        return $memos;
    }

    private function _get_unreviewed_memos()
    {
        $memos = $this->post
            ->where('p_review_status', 0)
            ->where('p_type', 1)
            ->where('p_status', 0)
            ->orderBy('p_date', 'DESC')
            ->findAll();

        $unreviewed_memos = [];

        foreach ($memos as $key => $memo) {
            if ($memo['p_reviewers_id']) {
                $reviewer_ids = json_decode($memo['p_reviewers_id']);
                if (in_array($this->session->user_id, $reviewer_ids)) {
                    array_push($unreviewed_memos, $memo);
                }
            }
        }

        foreach ($unreviewed_memos as $key => $memo) {
            $recipient_ids = json_decode($memo['p_recipients_id']);
            $recipients = [];
            if ($recipient_ids) {
                foreach ($recipient_ids as $recipient_id) {
                    $user = $this->user->getAllUserData($recipient_id);
                    array_push($recipients, $user);
                }
            } else {
                $external_recipients = explode("\n", $memo['p_recipients_id']);
                $unreviewed_memos[$key]['external_recipients'] = $external_recipients;
            }
            $unreviewed_memos[$key]['written_by'] = $this->user->getAllUserData($memo['p_by']);
            $unreviewed_memos[$key]['recipients'] = $recipients;
        }

        return $unreviewed_memos;
    }

    private function _get_searched_memos($search_params)
    {
        $memos = $this->post
            ->where('p_status', 2)
            ->where('p_type', 1)
            ->like('p_subject', $search_params)
            ->orderBy('p_date', 'DESC')
            ->paginate(9);
        $searched_memos = [];
        foreach ($memos as $memo) {
            $recipient_ids = json_decode($memo['p_recipients_id']);
            $recipients = [];
            foreach ($recipient_ids as $recipient_id) {
                $user = $this->user->getAllUserData($recipient_id);
                array_push($recipients, $user);
            }
            if (in_array(session()->user_id, $recipient_ids)) {
                $memo['written_by'] = $this->user->getAllUserData($memo['p_by']);
                $memo['signed_by'] = $this->user->getAllUserData($memo['p_signed_by']);
                $memo['recipients'] = $recipients;
                array_push($searched_memos, $memo);
            }
        }
        return $searched_memos;
    }

    private function _get_user_memos()
    {
        $memos = $this->post
            ->where('p_by', $this->session->user_id)
            ->where('p_type', 1)
            ->orderBy('p_date', 'DESC')
            ->findAll();
        foreach ($memos as $key => $memo) {
            $memos[$key]['signed_by'] = $this->user->getAllUserData($memo['p_signed_by']);
        }
        return $memos;
    }

    private function _get_memo($memo_id)
    {
        $memo = $this->post->find($memo_id);
        if ($memo) {
            // written by
            $written_by = $this->user->find($memo['p_by']);
            $written_by_employee = $this->employee->find($written_by['user_employee_id']);
            $written_by_position = $this->position->find($written_by_employee['employee_position_id']);
            $written_by_department = $this->department->find($written_by_position['pos_id']);
            $memo['written_by'] = $written_by;
            $memo['written_by']['position'] = $written_by_position;
            $memo['written_by']['department'] = $written_by_department;
            // signed by
            $signed_by = $this->user->find($memo['p_signed_by']);
            $signed_by_employee = $this->employee->find($signed_by['user_employee_id']);
            $signed_by_position = $this->position->find($signed_by_employee['employee_position_id']);
            $signed_by_department = $this->department->find($signed_by_position['pos_id']);
            $memo['signed_by'] = $signed_by;
            $memo['signed_by']['position'] = $signed_by_position;
            $memo['signed_by']['department'] = $signed_by_department;

            $memo['attachments'] = $this->pa->where('pa_post_id', $memo_id)->findAll();
            $recipient_ids = json_decode($memo['p_recipients_id']);
            $reviewers_ids = json_decode($memo['p_reviewers_id']);
            $recipients = [];
            $reviewers = [];
            if ($recipient_ids) {
                foreach ($recipient_ids as $recipient_id) {
                    $user = $this->user->getAllUserData($recipient_id);
                    array_push($recipients, $user);
                }
            } else {
                $external_recipients = explode("\n", $memo['p_recipients_id']);
                $memo['external_recipients'] = $external_recipients;
            }

            if ($reviewers_ids) {
                foreach ($reviewers_ids as $reviewer_id) {
                    $user = $this->user->getAllUserData($reviewer_id);
                    array_push($reviewers, $user);
                }
            }

            $memo['recipients'] = $recipients;
            $memo['reviewers'] = $reviewers;
            $memo['organization'] = $this->organization->first();
        }

        return $memo;
    }

    private function _get_department_employees()
    {
        $department_employees = [];
        $departments = $this->department->findAll();
        foreach ($departments as $department) {
            $department_employees[$department['dpt_name']] = [];
            $employees = $this->employee
                ->where('employee_department_id', $department['dpt_id'])
                ->findAll();
            foreach ($employees as $employee) {
                $user = $this->user->where('user_employee_id', $employee['employee_id'])->first();
                $user_permissions = $this->user_permissions->viewUserPermissions($user['user_id']);
                if ($user['user_status'] == 1 && ($user['user_type'] == 3 || $user['user_type'] == 2) && in_array($this->memo_permission, $user_permissions)) {
                    $employee['user'] = $user;
                    $employee['position'] = $this->position->find($employee['employee_position_id']);
                    if ($employee['position']['pos_name'] !== 'Director General/CEO')
                        array_push($department_employees[$department['dpt_name']], $employee);
                    elseif ($this->_validate_permission(Permissions::CAN_SEND_TO_DG->value))
                        array_push($department_employees[$department['dpt_name']], $employee);
                }
            }
        }
        return $department_employees;
    }

    private function _get_official_stamps()
    {
        $stamps = $this->stamp->findAll();
        foreach ($stamps as $key => $stamp) {
            $stamp_users = json_decode($stamp['stamp_users']);
            if (!in_array($this->session->user_id, $stamp_users)) {
                unset($stamps[$key]);
            }
        }
        return $stamps;
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

    private function _group_one_department_hods()
    {
        $user = $this->user->where('user_id', $this->session->user_id)->first();
        $employee = $this->employee->getEmployeeDetailsByUserEmployeeId($user['user_employee_id'])[0];
        $grouped_hods = [];
        $employees = $this->employee->getAllEmployeesInDepartmentWithPermission($employee['dpt_id'], Permissions::HOD->value);
        foreach ($employees as $employee) {
            $department_name = $employee['dpt_name'];
            if (!isset($grouped_hods[$department_name])) {
                $grouped_hods[$department_name] = [];
            }
            $grouped_hods[$department_name][] = $employee;
        }
        return $grouped_hods;
    }
}
