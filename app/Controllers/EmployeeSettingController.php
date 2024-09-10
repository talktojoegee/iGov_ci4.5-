<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Department;
use App\Models\Organization;
use App\Models\Position;
use App\Models\Employee;
use App\Models\UserModel;

class EmployeeSettingController extends BaseController
{
	public function __construct()
	{
		if (session()->get('type') == 2):
			echo view('auth/access_denieda');
			exit;
		endif;
		
		$this->organization = new Organization();
		$this->department = new Department();
		$this->position = new Position();
		$this->employee = new Employee();
		$this->user = new UserModel();
	}
	public function new_employee()
	{
		
		if($this->request->getMethod() == 'POST'):
			$this->validator->setRules( [
				'employee_f_name'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter First Name'
					]
				],
				
				'employee_l_name'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter Last Name'
					]
				],
				
				'employee_sex'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Select Sex'
					]
				],
				
				'employee_dob'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter Date of Birth'
					]
				],
				
				'employee_department_id'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Select Department'
					]
				],
				
				'employee_position_id'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Select Position'
					]
				],
				
				'employee_level'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter Grade Level'
					]
				],
				
				'employee_step'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter Grade Step'
					]
				],
				
				'employee_phone'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter Phone Number'
					]
				],
				
				'employee_mail'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter E-mail Address'
					]
				],
		
			]);
			if ($this->validator->withRequest($this->request)->run()):
				$user_username = $_POST['user_username'];
				$user_type = $_POST['user_type'];
				unset($_POST['user_username']);
				unset($_POST['user_type']);
				$_POST['employee_phone'] = str_replace('-', '', $_POST['employee_phone']);
				$employee_id = $this->employee->insert($_POST);
				$full_name = $_POST['employee_f_name']." ".$_POST['employee_l_name'];
				//$user_username = $this->generate_unique_username($full_name, $employee_id);
				$user = array(
					'user_name' => $full_name,
					'user_password' => 'password1234',
					'user_username' => $user_username,
					'user_email' => $_POST['employee_mail'],
					'user_phone' => $_POST['employee_phone'],
					'user_employee_id' => $employee_id,
					'user_type'=> $user_type,
					'user_status' => 1
				);
				$this->user->save($user);
				
				session()->setFlashData("action","action successful");
				return redirect()->to(base_url('/new-employee'));
					
		else:
			$arr = $this->validator->getErrors();
			session()->setFlashData("errors",$arr);
			return redirect()->to(base_url('/new-employee'));
			
			
			
			
		endif;
	
		endif;
	
		if($this->request->getMethod() == 'GET'):
			$data['firstTime'] = $this->session->firstTime;
			$data['username'] = $this->session->user_username;
			$data['positions'] = $this->position->findAll();
			$data['departments'] = $this->department->findAll();
			$data['organization'] = $this->organization->first();
			return view('office/new-employee', $data);
		endif;
	}
	
	public function all_employees()
	{
		
		if($this->request->getMethod() == 'POST'):
			$this->validator->setRules( [
				'employee_f_name'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter First Name'
					]
				],
				
				'employee_l_name'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter Last Name'
					]
				],
				
				'employee_sex'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Select Sex'
					]
				],
				
				'employee_dob'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter Date of Birth'
					]
				],
				
				'employee_department_id'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Select Department'
					]
				],
				
				'employee_position_id'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Select Position'
					]
				],
				
				'employee_level'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter Grade Level'
					]
				],
				
				'employee_step'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter Grade Step'
					]
				],
				
				'employee_phone'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter Phone Number'
					]
				],
				
				'employee_mail'=>[
					'rules'=>'required',
					'errors'=>[
						'required'=>'Enter E-mail Address'
					]
				],
			
			]);
			if ($this->validator->withRequest($this->request)->run()):
				$user_username = $_POST['user_username'];
				$user_type = $_POST['user_type'];
				
				unset($_POST['user_username']);
				unset($_POST['user_type']);
				$_POST['employee_phone'] = str_replace('-', '', $_POST['employee_phone']);
				$employee_id = $this->employee->insert($_POST);
				$full_name = $_POST['employee_f_name']." ".$_POST['employee_l_name'];
				//$user_username = $this->generate_unique_username($full_name, $employee_id);
				$user = array(
					'user_name' => $full_name,
					'user_password' => 'password1234',
					'user_username' => $user_username,
					'user_email' => $_POST['employee_mail'],
					'user_phone' => $_POST['employee_phone'],
					'user_employee_id' => $employee_id,
					'user_type'=> $user_type,
					'user_status' => 1
				);
				
				print_r($user);
				
				//$this->user->save($user);
				
				session()->setFlashData("action","action successful");
				//return redirect()->to(base_url('/new-employee'));
			
			else:
				$arr = $this->validator->getErrors();
				session()->setFlashData("errors",$arr);
				return redirect()->to(base_url('/new-employee'));
			
			
			
			
			endif;
		
		endif;
		
		if($this->request->getMethod() == 'GET'):
			$data['firstTime'] = $this->session->firstTime;
			$data['username'] = $this->session->user_username;
			$data['employees'] = $this->employee->join('users', 'employees.employee_id = users.user_employee_id')
												->join('departments', 'employees.employee_department_id = departments.dpt_id')
												->join('positions', 'employees.employee_position_id = positions.pos_id')
												->where('users.user_status', 1)
												->findAll();
		return view('office/all_employees', $data);
		endif;
	}
	
	public function fetch_positions(){
		$dpt_id = $_POST['dpt_id'];
		$positions = $this->position->where('pos_dpt_id', $dpt_id)->findAll();
		echo json_encode($positions);
	}
	
	private function generate_unique_username($string_name, $rand_no){
		while(true){
			$username_parts = array_filter(explode(" ", strtolower($string_name))); //explode and lowercase name
			$username_parts = array_slice($username_parts, 0, 2); //return only first two arry part
			
			$part1 = (!empty($username_parts[0]))?substr($username_parts[0], 0,8):""; //cut first name to 8 letters
			$part2 = (!empty($username_parts[1]))?substr($username_parts[1], 0,5):""; //cut second name to 5 letters
			$part3 = ($rand_no)?rand(0, $rand_no):"";
			$part3 = $rand_no;
			
			$username = $part1. $part2. $part3; //str_shuffle to randomly shuffle all characters
			
			$username_exist_in_db = $this->user->where('user_username', $username)->first(); //check username in database
			if(!$username_exist_in_db):
				return $username;
			endif;
		}
	}
	
	public function check_username(){
		$username = $_POST['username'];
		
		$user = $this->user->where('user_username', $username)->first();
		
		if ($user):
			$response['success'] = false;

		else:
			$response['success'] = true;
			
		endif;
		return $this->response->setJSON($response);
	}


  public function manage_employee($id){
    $employee = $this->employee->getEmployeeByUserEmployeeId($id);
    if(empty($employee)){
      return redirect()->back()->with("error", "<strong>Whoops!</strong> No record found");
    }
    $data['firstTime'] = $this->session->firstTime;
    $data['username'] = $this->session->user_username;
    $data['employee'] = $employee;
    $data['positions'] = $this->position->findAll();
    $data['departments'] = $this->department->findAll();

    return view('office/manage-employee', $data);
  }


  public function update_employee_profile(){
    $employeeId = $_POST['employee'];
    $employee = null;
    if(isset($employeeId)){
      $employee = $this->employee->getEmployeeByUserEmployeeId($employeeId);
    }
    if(empty($employee)){
      return redirect()->back()->with("error", "<strong>Whoops!</strong> No record found");
    }

    $inputs = $this->validate(
      [
        'surname' =>
          ['rules'=> 'required', 'label'=>'Subject','errors' => [
            'required' => 'Enter surname']
          ],
        'firstName' =>
          ['rules'=> 'required', 'errors'=>
            ['required'=>'Enter first name']
          ],
        'mobileNo' => ['rules'=>'required', 'errors'=>['required'=>'Enter mobile number']],
        'address' => ['rules'=> 'required', 'errors'=>['required'=>'Enter address']],
        'userType' => ['rules'=> 'required', 'errors'=>['required'=>'Indicate user type']],
        'directorate' => ['rules'=> 'required', 'errors'=>['required'=>'Select directorate from the list provided']],
        'section' => ['rules'=> 'required', 'errors'=>['required'=>'Select section']],
        'employee' => ['rules'=> 'required', 'errors'=>['required'=>'']],
      ]);
    if (!$inputs) {

      return view('office/manage-employee',
        [
        'validation' => $this->validator,
        'firstTime'=>$this->session->firstTime,
        'username'=>$this->session->user_username,
         'positions'=>$this->position->findAll(),
         'departments'=>$this->department->findAll(),
          'employee'=>$employee
      ]);
    }else{
      $data = [
        'employee_f_name'=>$this->request->getPost('firstName'),
        'employee_l_name'=>$this->request->getPost('surname'),
        'employee_o_name'=>$this->request->getPost('otherNames'),
        'employee_sex'=>$this->request->getPost('gender'),
        'employee_dob'=>$this->request->getPost('dateOfBirth'),
        'employee_department_id'=>$this->request->getPost('directorate'),
        'employee_position_id'=>$this->request->getPost('section'),
        'employee_phone'=>$this->request->getPost('mobileNo'),
        'employee_address'=>$this->request->getPost('address'),
      ];
      $this->employee->update($employeeId, $data);

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

      return redirect()->back()->with("success", "<strong>Success!</strong> Action successful.");
    }

  }


}
