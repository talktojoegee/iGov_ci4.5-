<?php

namespace App\Controllers;

use App\Models\Department;
use App\Models\Organization;
use App\Models\Position;
use App\Models\Employee;
use App\Models\Stamp;
use App\Models\Token;
use App\Models\UserModel;
use App\Models\Verification;

class EmployeeController extends BaseController
{
	public function __construct() {
		if (session()->get('type') == 1):
			echo view('auth/access_denied');
			exit;
		endif;
		$this->organization = new Organization();
		$this->department = new Department();
		$this->position = new Position();
		$this->employee = new Employee();
		$this->user = new UserModel();
		$this->verification = new Verification();
		$this->token = new Token();
		$this->stamp = new Stamp();
	}

	public function my_account() {
		$data['firstTime'] = $this->session->firstTime;
		$data['username'] = $this->session->user_username;
		$data['user'] = $this->_get_employee_detail();
		$data['official_stamps'] = $this->_get_official_stamps();
		return view('/pages/employee/my-account', $data);
	}
	public function view_profile($userId) {
    //return dd((int)$userId);
		$data['firstTime'] = $this->session->firstTime;
		$data['username'] = $this->session->user_username;
		$data['user'] = $this->_get_employee_detail_by_id($userId);
		$data['official_stamps'] = $this->_get_official_stamps();
		return view('/pages/employee/profile', $data);
	}

	public function check_signature_exists() {
		$user = $this->user->find(session()->user_id);
    
		$employee = $this->employee->find($user['user_employee_id']);
		if ($employee['employee_signature']) {
			$verified = $this->verification->where([
				'ver_user_id' => session()->user_id,
				'ver_type' => 'e-signature',
				'ver_status' => 1
			])->first();
			if ($verified) {
				$response['success'] = true;
				$response['message'] = $employee['employee_signature'];
			} else {
				$response['success'] = false;
				$response['message'] = 'Your E-Signature has been set up but is not verified yet. You will be redirected to My Account to verify it now.';
			}
		} else {
			$response['success'] = false;
			$response['message'] = 'Your E-Signature has not been set up yet. You will be redirected to My Account to set it up now.';
		}
		return $this->response->setJSON($response);
	}

	public function setup_signature() {
    
		$user = $this->user->find(session()->user_id);
		$employee = $this->employee->find($user['user_employee_id']);
		$phone = $employee['employee_phone'];
		$phone = '234'.substr($phone, 1, strlen($phone));
		$organization = $this->organization->first();
		$file = $this->request->getFile('file');
		if (!empty($file)) {
			if($file->isValid() && !$file->hasMoved()) {
				$file_name = $file->getRandomName();
				$file->move('uploads/signatures', $file_name);
				$employee_data = [
					'employee_id' => $employee['employee_id'],
					'employee_signature' => $file_name
				];
				if ($this->employee->save($employee_data)) {
					$to = $employee['employee_mail'];
					$subject = 'Verify E-Signature';
					$data['subject'] = $subject;
					$data['user'] = $user['user_name'];
					$data['organization'] = $organization['org_name'];
					$data['ver_code'] = $code = $this->_get_verification_code('e-signature');
					
					$curl = curl_init();
					
					curl_setopt_array($curl, array(
						CURLOPT_URL => 'https://termii.com/api/sms/send',
						CURLOPT_RETURNTRANSFER => true,
						CURLOPT_ENCODING => '',
						CURLOPT_MAXREDIRS => 10,
						CURLOPT_TIMEOUT => 0,
						CURLOPT_FOLLOWLOCATION => true,
						CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						CURLOPT_CUSTOMREQUEST => 'POST',
						CURLOPT_POSTFIELDS =>' {
							          "to": "'.$phone.'",
							           "from": "N-Alert",
							           "sms": "Your iGov signature code is: '.$code.' It expires in 10 Mins",
							           "type": "plain",
							           "channel": "dnd",
							           "api_key": "TLfrtWYbF5uWb0GLWjwDigrMb722yJgAp2B3jDoYYRzYOSjIU3PHwRIpGSZlga"
							                }',
													CURLOPT_HTTPHEADER => array(
														'Content-Type: application/json'
													),
												));
												
					$responses = curl_exec($curl);
					
					curl_close($curl);
					
//					$response['success'] = true;
//					$response['message'] = $responses;
					
					
					$message = view('email/signature-otp', $data);
					$from['name'] = 'NSIB by Connexxion Telecom';
					$from['email'] = 'support@connexxiontelecom.com';
					if ($this->send_mail($to, $subject, $message, $from)) {
						$response['success'] = true;
						$response['message'] = 'E-signature upload was successful. Verify your e-Signature now with OTP sent to your email or secured token.';
					}
					else {
						$response['success'] = false;
						$response['message'] = 'An error occurred while sending your E-Signature verification code';
					}
				} else {
					$response['success'] = false;
					$response['message'] = 'An error occurred while setting up your E-Signature.';
				}
			}
		}
		return $this->response->setJSON($response);
	}
	public function verify_token() {

		$user = $this->user->find(session()->user_id);
    if(empty($user)){
      $response['success'] = false;
      $response['message'] = 'An error occurred while setting up your E-Signature.';
      return $this->response->setJSON($response);
    }
		//$employee = $this->employee->find($user['user_employee_id']);

    $response['success'] = false;
    $response['message'] = 'An error occurred while setting up your E-Signature.';
		return $this->response->setJSON($response);
	}


  public function change_password()
  {
    helper(['form']);
      $rules = [
        'currentPassword' => [
          'rules' => 'required|min_length[6]',
          'errors' => [
            'required' => 'Enter current password',
            'min_length' => 'Password must be at least 6 characters'
          ]
        ],
        'newPassword' => [
          'rules' => 'required|min_length[6]',
          'errors' => [
            'required' => 'Choose new password',
            'min_length' => 'Password must be at least 6 characters'
          ]
        ],

        'reTypePassword' => [
          'rules' => 'required|matches[newPassword]',
          'errors' => [
            'required' => 'Re-type new password',
            'matches' => 'Password does not match'
          ]
        ]
      ];
    
    if($this->validate($rules)){
        $user_id = $this->session->user_id;
        $data = $this->user->where('user_id', $user_id)
          ->first();
        if ($data) {
          $currentPassword = $_POST['currentPassword'];
          $newPassword = $_POST['newPassword'];
          $pass = $data['user_password'];
          $verify_password = password_verify($currentPassword, $pass);

          if ($verify_password) {
            $new_password = password_hash($newPassword, PASSWORD_BCRYPT);

            $this->user->update($user_id, ['user_password' => $new_password]);
            return redirect()->back()->with("success", "Password changed successfully.");
          } else {
            session()->setFlashdata('error', 'Current password does not match our records');
            return redirect()->to('/profile/'.$data['user_id']);
          }

        }else{
          return redirect()->back()->with("error", "<strong>Whoops!</strong> No record found");
        }
      }else{
      $data['firstTime'] = $this->session->firstTime;
      $data['username'] = $this->session->user_username;
      $data['user'] = $this->_get_employee_detail();
      $data['official_stamps'] = $this->_get_official_stamps();
      $data['validation'] = $this->validator;
      $data['url'] = '';
      return  view('pages/employee/profile', $data);
    }
  }

	public function verify_signature() {
		$post_data = $this->request->getPost();
		$ver_code = $post_data['ver_code'];

    $token = $this->token->where(['token_user_id'=> $this->session->user_id,
      'token_symbol'=>$ver_code, 'token_status'=>1])->first();
    if($token){
      $verification = $this->verification->where([
        'ver_user_id' => session()->user_id,
        'ver_type' => 'e-signature',
        'ver_status' => 0
      ])->first();

      if ($verification) {
        $verification_data = [
          'ver_id' => $verification['ver_id'],
          'ver_status' => 1,
        ];
        $this->verification->save($verification_data);
        $response['success'] = true;
        $response['message'] = 'Your E-Signature is successfully verified.';
      } else {
        $response['success'] = false;
        $response['message'] = 'An error occurred while verifying your e-signature.';
      }

    }else {
      $response['success'] = false;
      $response['message'] = 'An error occurred while verifying your e-signature or token not set.';
    }
   // return $this->response->setJSON($response);


    if(empty($token)){
      $verification = $this->verification->where([
        'ver_user_id' => session()->user_id,
        'ver_type' => 'e-signature',
        'ver_code' => $ver_code,
        'ver_status' => 0
      ])->first();

      if ($verification) {
        $verification_data = [
          'ver_id' => $verification['ver_id'],
          'ver_status' => 1,
        ];
        $this->verification->save($verification_data);
        $response['success'] = true;
        $response['message'] = 'Your E-Signature is successfully verified.';
      } else {
        $response['success'] = false;
        $response['message'] = 'An error occurred while verifying your e-signature.';
      }
    }

		return $this->response->setJSON($response);
	}

	public function submit_token() {
		$post_data = $this->request->getPost();
		$user = $this->user->find($this->session->user_id);
		$employee = $this->employee->find($user['user_employee_id']);
		$verified = $this->verification->where([
			'ver_user_id' => $this->session->user_id,
			'ver_type' => 'e-signature',
			'ver_status' => 1
		])->first();
		/*if (!$employee['employee_signature'] || !$verified) {
			$response['success'] = false;
			$response['message'] = 'You must create and verify your E-Signature before creating your e-signature Token.';
			return $this->response->setJSON($response);
		}*/
		$token_data = [
			'token_symbol' => $post_data['token_symbol'],
			'token_user_id' => $this->session->user_id,
			'token_status' => 0
		];
		$token_exists = $this->token->where('token_user_id', $this->session->user_id)->first();
		if ($token_exists) {
			$token_data['token_id'] = $token_exists['token_id'];
		}
		if ($this->token->save($token_data)) {
			$response['success'] = true;
			$response['message'] = 'Please enter your password to confirm the security token.';
		} else {
			$response['success'] = false;
			$response['message'] = 'an error occurred while saving your security token.';
		}
		return $this->response->setJSON($response);
	}

	public function confirm_token() {
		$post_data = $this->request->getPost();
		$password = $post_data['password'];
		$user = $this->user->find($this->session->user_id);
		$password_verified = password_verify($password, $user['user_password']);
		if ($password_verified) {
			$token = $this->token->where('token_user_id', $this->session->user_id)->first();
			$token_data = [
				'token_id' => $token['token_id'],
				'token_status' => 1
			];
			$this->token->save($token_data);
			$response['success'] = true;
			$response['message'] = 'Your token was confirmed successfully';
		} else {
			$response['success'] = false;
			$response['message'] = 'Your token could not be confirmed as you entered your password incorrectly';
		}
		return $this->response->setJSON($response);
	}

	private function _get_employee_detail() {
		$user = $this->user->find(session()->user_id);
		$user['employee'] = $this->employee->find($user['user_employee_id']);
		$user['department'] = $this->department->find($user['employee']['employee_department_id']);
		$user['position'] = $this->position->find($user['employee']['employee_position_id']);
		$user['organization'] = $this->organization->first();
		$user['token'] = $this->token->where('token_user_id', $this->session->user_id)->first();
		$user['signature_ver'] = $this->verification->where([
			'ver_user_id' => session()->user_id,
			'ver_type' => 'e-signature'
		])->first();
		return $user;
	}
	private function _get_employee_detail_by_id($id) {
    //return dd($id);
		$user = $this->user->where("user_employee_id = ".$id)->first();
		$user['employee'] = $this->employee->find($id);
		$user['department'] = $this->department->find($user['employee']['employee_department_id']);
		$user['position'] = $this->position->find($user['employee']['employee_position_id']);
		$user['organization'] = $this->organization->first();
		$user['token'] = $this->token->where('token_user_id', $this->session->user_id)->first();
		$user['signature_ver'] = $this->verification->where([
			'ver_user_id' => session()->user_id,
			'ver_type' => 'e-signature'
		])->first();
		return $user;
	}

	private function _get_official_stamps() {
		$stamps = $this->stamp->findAll();
		foreach ($stamps as $key => $stamp) {
			$stamp_users = json_decode($stamp['stamp_users']);
			if (!in_array($this->session->user_id, $stamp_users)) {
				unset($stamps[$key]);
			}
		}
		return $stamps;
	}
}
