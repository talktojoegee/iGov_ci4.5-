<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Contractor;
use App\Models\Employee;
use App\Models\Project;
use App\Models\ProjectAttachment;
use App\Models\ProjectContractor;
use App\Models\ProjectConversation;
use App\Models\ProjectParticipation;
use App\Models\ProjectReport;
use App\Models\ProjectReportAttachment;
use App\Models\RequestChain;
use App\Models\Reminder;
use App\Models\UserModel;
use App\Models\Program;
use App\Models\ProgramParticipants;
use App\Models\ProgramAttachment;
use App\Models\Notification;
use App\Models\ProgramConversation;
use App\Models\CashRetirementMaster;

class ChainRequestController extends BaseController
{
  public function __construct()
  {
    if (session()->get('type') == 1): //employee
      echo view('auth/access_denied');
      exit;
    endif;
    $this->user = new UserModel();
    $this->employee = new Employee();
    $this->project = new Project();
    $this->requestchain = new RequestChain();

    $this->program = new Program();
    $this->programparticipant = new ProgramParticipants();
    $this->programattachment = new ProgramAttachment();
    $this->programconversation = new ProgramConversation();

    $this->projectparticipant = new ProjectParticipation();
    $this->projectattachment = new ProjectAttachment();
    $this->projectconversation = new ProjectConversation();
    $this->contractor = new Contractor();
    $this->projectcontractor = new ProjectContractor();
    $this->projectreport = new ProjectReport();
    $this->projectreportattachment = new ProjectReportAttachment();
    $this->reminder = new Reminder();
    $this->notification = new Notification();
    $this->cashretirementmaster = new CashRetirementMaster();

  }

    public function index()
    {
        //
    }


    public function requestForApproval(){
      $inputs = $this->validate([
        'itemId' => ['rules'=> 'required'],
        'type' => ['rules'=> 'required'],
        'authPerson' => ['rules'=> 'required', 'errors'=>['required'=>'Select who to act on this request']],
      ]);
      if (!$inputs) {
        return redirect()->back()->with("error", "Something went wrong. Try again.");
    }else{
          $data = [
            'rc_item_id'=>$this->request->getPost('itemId'),
            'rc_type'=>$this->request->getPost('type'),
            'rc_emp_id'=>$this->request->getPost('authPerson'),
            'rc_status'=>0,
            'rc_final'=>0,
          ];
          $this->requestchain->save($data);
        return redirect()->back()->with("success", "Request submitted!");
      }
    }

    public function actionRequest(){
    //return dd($this->request->getVar());
      $inputs = $this->validate([
        'itemId' => ['rules'=> 'required'],
        'type' => ['rules'=> 'required'],
        'decision' => ['rules'=> 'required'],
        'requestId' => ['rules'=> 'required'],
        //'authPerson' => ['rules'=> 'required', 'errors'=>['required'=>'Select who to act on this request']],
      ]);
      if (!$inputs) {
        return redirect()->back()->with("error", "Something went wrong. Try again.");
    }else{
        $status = $this->request->getPost('decision') ? 1 : 2;
        $final = $this->request->getPost('final');
        if($final == 1){
          $data = [
            'rc_type'=>$this->request->getPost('type'),
            'rc_emp_id'=>$this->request->getPost('authPerson'),
            'rc_status'=>$status,
            'rc_final'=> $this->request->getPost('final'),
          ];
          $this->requestchain->update($this->request->getPost('requestId'), $data);
          if($this->request->getPost('type') == 'program'){

            $program = $this->program->getProgramById($this->request->getPost('itemId'));
            if(!empty($program)){
              $programData = [
                'program_status'=>$status,
                'program_actioned_by'=>$this->session->user_employee_id,
                'program_date_actioned'=>date('Y-m-d'),
              ];
              $this->program->update($this->request->getPost('itemId'), $programData);
              //now register program now as project
          }

          }else if($this->request->getPost('type') == 'retirement'){
            $retirement = $this->cashretirementmaster->getCashRetirementById($this->request->getPost('itemId'));
            if(!empty($retirement)){
              $retirementData = [
                'crm_status'=>2, //approved
                'crm_approved_by'=>$this->session->user_employee_id,
                'crm_date_approved'=>date('Y-m-d'),
              ];
              $this->cashretirementmaster->update($this->request->getPost('itemId'), $retirementData);
            }
          }

        }else{
          $nextAuth = $this->request->getPost('authPerson');
          if(!isset($nextAuth )){
            return redirect()->back()->with("error", "Something went wrong. Try again.");
          }
                $updateData = [
                  'rc_type'=>$this->request->getPost('type'),
                  //'rc_emp_id'=>$this->request->getPost('authPerson'),
                  'rc_status'=>$status,
                  'rc_final'=> $this->request->getPost('final'),
                ];
                $this->requestchain->update($this->request->getPost('requestId'), $updateData);
                //New record
                $data = [
                  'rc_item_id'=>$this->request->getPost('itemId'),
                  'rc_type'=>$this->request->getPost('type'),
                  'rc_emp_id'=>$this->request->getPost('authPerson'),
                  'rc_status'=>0,
                  'rc_final'=>0,
                ];
                $this->requestchain->save($data);
        }

        return redirect()->back()->with("success", "Action successful");
      }
    }
}
