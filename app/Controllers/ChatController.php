<?php

namespace App\Controllers;

use Ably\AblyRest;
use App\Controllers\BaseController;
use App\Models\Chat;
use App\Models\Employee;

class ChatController extends BaseController
{
    public function __construct()
    {
        if (session()->get('type') == 1): //employee
            echo view('auth/access_denied');
            exit;
        endif;
        $this->chat = new Chat();
        $this->employee = new Employee();

    }
	public function chat()
	{
	    $data = [
	      'firstTime'=>$this->session->firstTime,
          'username'=>$this->session->username,
          'employees'=>$this->employee->getAllEmployeeExceptAuthUser($this->session->user_employee_id),
          'emp'=>  $this->employee->getEmployeeByUserEmployeeId($this->session->user_employee_id)
        ];
	    return view('pages/chat/chat', $data);
	}

	public function getMessages(){
        $selected_user = $this->request->getVar('user');
        $auth_user = $this->session->user_employee_id;
        $selected_employee = $this->employee->getEmployeeByUserEmployeeId($selected_user);
        $auth_employee = $this->employee->getEmployeeByUserEmployeeId($auth_user);
            $messages = $this->chat->fetchChatMessages($auth_user, $selected_user);
            //$messages = $this->chat->getMessagesWithUserByUserId($from_user_id, $to_user_id);
            $data = [
                'messages'=>$messages,
                'auth_employee'=>$auth_employee,
                'selected_employee'=>$selected_employee
            ];
            $html = "";
            $html2 = "";
            /*foreach ($messages as $m){
                if($m['chat_from_id'] == $auth_employee['employee_id']){
                     $html .="<li class='clearfix odd'>";
                        $html .="<div class='chat-avatar'>";
                            $html .="<img src='/assets/images/users/user-5.jpg' class='rounded' alt='James Z'>";
                        $html .='</div>';
                        $html .="<div class='conversation-text'>";
                            $html .="<div class='ctext-wrap'>";
                                $html .="<i>".$auth_employee['employee_f_name']." ".$auth_employee['employee_l_name']."</i>";
                                $html .="<p>".$m['chat_message']."</p>";
                                $html .="<p>".date('F j, Y g:i a', strtotime($m['created_at']))."</p>";
                            $html .='</div>';
                        $html .='</div>';
                    $html .='</li>';
                    echo $html;
                }

                if($m['chat_from_id'] == $selected_employee['employee_id']){
                    $html2 .="<li class='clearfix'>";
                    $html2 .="<div class='chat-avatar'>";
                    $html2 .="<img src='/assets/images/users/user-5.jpg' class='rounded' alt='James Z'>";
                    $html2 .='</div>';
                    $html2 .="<div class='conversation-text'>";
                    $html2 .="<div class='ctext-wrap'>";
                    $html2 .="<i>".$selected_employee['employee_f_name']." ".$selected_employee['employee_l_name']."</i>";
                    $html2 .="<p>".$m['chat_message']."</p>";
                    $html2 .="<p>".date('F j, Y g:i a', strtotime($m['created_at']))."</p>";
                    $html2 .='</div>';
                    $html2 .='</div>';
                    $html2 .='</li>';
                    echo $html2;
                }
            }*/
            //return json_encode($messages);
            return view('pages/chat/partials/_messages',$data);

    }
/*
    public function sendMessage(){
        $message = $this->request->getVar('message');
        $user = $this->request->getVar('user');
        $auth_user = $this->session->user_employee_id;
        if(!empty($message) && !empty($user)){
            $data = [
                'chat_to_id'=>$user,
                'chat_from_id'=>$auth_user,
                'chat_message'=>$message
            ];
            $this->chat->save($data);
            $selected_employee = $this->employee->getEmployeeByUserEmployeeId($user);
            $auth_employee = $this->employee->getEmployeeByUserEmployeeId($auth_user);
            $messages = $this->chat->fetchChatMessages($auth_user, $user);
            //$messages = $this->chat->getMessagesWithUserByUserId($from_user, $user);
            $data = [
                'messages'=>$messages,
                'auth_employee'=>$auth_employee,
                'selected_employee'=>$selected_employee
            ];
            /*$ably = new AblyRest('aht0IA.nknxWw:BjDaL6hWD5Pc929a');
            $channel = $ably->channel('chatchannel');
            $channel->publish('helloevent', $message);
            return view('pages/chat/partials/_messages',$data);
        }
    }
*/

  public function getAllUsers(){
    $data['data'] = $this->chat->allUser();
    $data['last_msg'] = array();
    helper(['url']);
    //$this->load->helper('url');
    if(!is_array($data['data'])){
      echo "<p class='text-center'>No user available.</p>";
    }else{
      $count = count($data['data']);
      for($i = 0; $i < $count; $i++){
        $unique_id = $data['data'][$i]['user_id'];
        $msg = $this->chat->getLastMessage($unique_id);
        for($j = 0; $j < count($msg); $j++){

          $time = explode(" ",$msg[0]['created_at']); //00:00:00.0000
          $time = explode(".", $time[1]);//00:00:00
          $time = explode(":",$time[0]);//00 00 00
          if((int)$time[0] == 12){
            $time = $time[0].":".$time[1]." PM";
          }
          elseif((int)$time[0] > 12){
            $time = ($time[0] - 12).":".$time[1]." PM";
          }else{
            $time = $time[0].":".$time[1]." AM";
          }

          array_push($data['last_msg'],array(
            'message' => $msg[0]['chat_message'],
            'sender_id' => $msg[0]['chat_from_id'],
            'receiver_id' => $msg[0]['chat_to_id'],
            'time' => $time //00:00
          ));
        }
      }
      return view('pages/chat/partials/sampleDataShow',$data); 
    }

  }
  
 /* public function getOneUser(){
      $userId = $this->request->getPost('data');
      $user = $this->chat->getIndividual($userId);
      return $user;
  }*/

  public function getOneUser(){
    $returnVal = $this->chat->getIndividual($_POST['data']);
    print_r(json_encode($returnVal,true));
  }

  public function ownerDetails(){
    $res = $this->chat->ownerDetails();
    print_r(json_encode($res));
  }

  public function getMessage(){
    if(isset($_POST['data']) && isset($_SESSION['user_id'])){
      $data['data'] = $this->chat->getMessage($_POST['data']);
      $data['image'] = $_POST['image'];
      return view('pages/chat/partials/sampleMessageShow',$data);
    }
  }

  public function setNoMessage(){
    $data['image'] = $_POST['image'];
    $data['name'] = $_POST['name'];
    return view('pages/chat/partials/notmessageyet',$data);
  }

  public function sendMessage(){
    if(isset($_POST['data']) && isset($_SESSION['user_id'])){
      $jsonDecode = json_decode($_POST['data'],true);
      $uniq = $_SESSION['user_id'];
      $arr = array(
        'created_at' => $jsonDecode['datetime'],
        'chat_from_id' => $uniq,
        'chat_to_id' => $jsonDecode['uniq'],
        'chat_message' => $jsonDecode['message'],
      );
      $this->chat->insert($arr);
    }
  }
  
  
}
