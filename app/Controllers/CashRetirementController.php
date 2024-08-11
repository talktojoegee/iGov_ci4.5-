<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\Employee;
use App\Models\CashRetirementMaster;
use App\Models\CashRetirementDetail;
use App\Models\CashRetirementComment;
use App\Models\CashRetirementAttachment;
use App\Models\RequestChain;

class CashRetirementController extends BaseController
{
    public function __construct()
    {
      if (session()->get('type') == 1): //employee
        echo view('auth/access_denied');
        exit;
      endif;

        $this->user = new UserModel();
        $this->employee = new Employee();
        $this->cashretirementmaster = new CashRetirementMaster();
        $this->cashretirementdetail = new CashRetirementDetail();
        $this->cashretirementcomment = new CashRetirementComment();
        $this->cashretirementattachment = new CashRetirementAttachment();
        $this->requestchain = new RequestChain();
    }


  public function my_cash_retirement(){
    $data = [
      'my_requests'=>$this->cashretirementmaster->getAllEmployeeRetirements( $this->session->user_employee_id),
      'firstTime'=>$this->session->firstTime,
      'username'=>$this->session->user_username,
    ];

    return view('pages/cash-retirement/index', $data);
  }

  public function new_cash_retirement(){

    $data = [
      'firstTime'=>$this->session->firstTime,
      'username'=>$this->session->user_username,
    ];

    return view('pages/cash-retirement/new-cash-retirement', $data);
  }


  public function store_new_cash_retirement(){
    $inputs = $this->validate(
      [
        'subject' =>
          ['rules'=> 'required', 'label'=>'Subject','errors' => [
            'required' => 'Enter subject']
          ],
        'type' =>
          ['rules'=> 'required', 'errors'=>
            ['required'=>'Choose type']
          ],
        'amount_obtained' => ['rules'=>'required', 'errors'=>['required'=>'Amount obtained']],
        'amount_retired' => ['rules'=> 'required', 'errors'=>['required'=>'Enter amount retired']],
        'purpose' => ['rules'=> 'required', 'errors'=>['required'=>'State the purpose']],
        //'receiptNo.*' => ['rules'=> 'required', 'errors'=>['required'=>'State the purpose']],
      ]);
    if (!$inputs) {

      return view('pages/cash-retirement/new-cash-retirement', [
        'validation' => $this->validator,
        'firstTime'=>$this->session->firstTime,
        'username'=>$this->session->user_username,
      ]);
    }else{
      $data = [
        'crm_subject'=>$this->request->getPost('subject'),
        'crm_type'=>$this->request->getPost('type'),
        'crm_amount_obtained'=>$this->request->getPost('amount_obtained'),
        'crm_amount_retired'=>$this->request->getPost('amount_retired'),
        'crm_balance'=>$this->request->getPost('balance'),
        'crm_purpose'=>$this->request->getPost('purpose'),
        'crm_status'=> 0, //$this->request->getPost('status'),
        'crm_payable_to'=>$this->session->user_employee_id,
        'crm_url'=>substr(sha1(time()),21,40)
      ];
      $masterId = $this->cashretirementmaster->insert($data);// $this->cashretirementmaster->insert($data);
      if($masterId){
        if($this->request->getPost('receiptNo') !== null){
          foreach($this->request->getPost('receiptNo') as $key => $list){
            $listData = [
              'crd_receipt_no'=>$this->request->getPost('receiptNo')[$key],
              'crd_date'=>$this->request->getPost('date')[$key],
              'crd_amount'=>$this->request->getPost('amount')[$key],
              'crd_remark'=>$this->request->getPost('remark')[$key],
              'crd_master_id'=>$masterId,
            ];
            $this->cashretirementdetail->insert($listData);
          }
        }
      }
      #Notify author
      /*$notification_data = [
        'subject' => 'New Program Created',
        'body' => 'You created a program',
        'recipient' => $this->session->user_employee_id,
        'link' => site_url('/projects/').$programId,
        'cta' => 'click to view program',
        'notification_status' => 0,
      ];
      $this->notification->save($notification_data);*/


      //$this->send_notification('New Program Created', 'You created a program', $this->session->user_id, site_url('/projects/').$project, 'click to view program');

      
      if($this->request->getFileMultiple('attachments')){
        foreach ($this->request->getFileMultiple('attachments') as $attachment){
          if($attachment->isValid() ){
            $extension = $attachment->guessExtension();
            $filename = $attachment->getRandomName();
            $attachment->move('uploads/posts', $filename);
            $dataAttachment = [
              'cra_master_id' => $masterId,
              'cra_attachment' => $filename
            ];
            $this->cashretirementattachment->save($dataAttachment);
          }
        }
      }

      return redirect()->back()->with("success", "<strong>Success!</strong> Action successful.");
    }

  }



  public function show_cash_retirement_details($url){
    $record = $this->cashretirementmaster->getCashRetirementByUrl($url);
    if(!empty($record)){
      $requests = $this->requestchain->getRequestChain('retirement', $record->crm_id);
      $pendingRequestStatus = true;
      $pendingRequestStatus = true;
      if(count($requests) > 0){
        foreach($requests as $request){
          if($request->rc_status == 0){
            $pendingRequestStatus = false;
          }
        }
      }
      $data = [
        //'pendingId'=>0,
        'pendingRequestStatus'=>$pendingRequestStatus,
        'firstTime'=>$this->session->firstTime,
        'username'=>$this->session->user_username,
        'empId'=>$this->session->user_employee_id,
        'hods'=>$this->employee->getAllHODs(),
        'record'=>$record,
        'requests'=>$requests,//$this->requestchain->getRequestChain('program', $id),
        'requested_by'=>$this->cashretirementmaster->getCreatedBy($record->crm_id),
        'items'=>$this->cashretirementdetail->where('crd_master_id = '.$record->crm_id)->findAll(),
        'attachments'=>$this->cashretirementattachment->where('cra_master_id = '.$record->crm_id)->findAll()

      ];
      //return dd($data);
      return view('pages/cash-retirement/view', $data);
    }else{
      return redirect()->back()->with("error", "<strong>Whoops!</strong> No record found");
    }
  }
}
