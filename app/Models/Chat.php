<?php

namespace App\Models;

use CodeIgniter\Model;

class Chat extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'chats';
	protected $primaryKey           = 'chat_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['chat_id', 'chat_from_id','chat_to_id','chat_message','chat_attachment','chat_is_read'];


	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];


	public function getMessagesWithUserByUserId($from_user_id, $to_user_id){
        $builder = $this->db->table('chats as c');
        $builder->where('c.chat_to_id = '.$to_user_id);
        $builder->orWhere('c.chat_from_id = '.$from_user_id);
        return $builder->get()->getResultObject();
    }
    public function fetchChatMessages($sender, $receiver){
        $builder = $this->db->table('chats as c');
        $builder->where('chat_from_id = '.$sender);
        $builder->orWhere( 'chat_from_id = '.$receiver);
        $builder->orWhere('chat_to_id = '.$receiver);
        $builder->orWhere(' chat_to_id = '.$sender);
        $builder->orderBy('chat_id', 'ASC');
        return $builder->get()->getResultArray();
    }
    public function getMessages(){
	    return Chat::findAll();
        /*$builder = $this->db->table('chats as c');
        return $builder->get()->getResult();*/
    }

  public function allUser(){
    if(isset($_SESSION['user_id'])){
      $mysession = $_SESSION['user_id'];

      $builder = $this->db->table('users as u');
      $builder->join('employees as e','e.employee_id = u.user_employee_id' );
      $builder->select('*');
      $builder->where('user_id != '.$mysession);
      return $builder->get()->getResultArray();


     /* $this->db->select('*');
      $this->db->where('unique_id != ',$mysession);
      $data = $this->db->get('user');
      if($data->num_rows() > 0){
        return $data->result_array();
      }else{
        return false;
      }*/
      
      
    }

  }

  public function getLastMessage($data){
    $session_id = $_SESSION['user_id'];
    $where = "chat_from_id = '$session_id' AND chat_to_id = '$data' OR 
		chat_from_id = '$data' AND chat_to_id = '$session_id'";
    $builder = $this->db->table('chats');
    $builder->select('*');
    $builder->where($where);
    $builder->orderBy('created_at', 'DESC');
    return $builder->get()->getResultArray();
  }

  public function getIndividual($id){
    $builder = $this->db->table('users as u');
    $builder->join('employees as e','e.employee_id = u.user_employee_id' );
    $builder->select('*');
    $builder->where('user_id = '.$id);
    return $builder->get()->getResultArray();
  }

  public function ownerDetails(){
    if(isset($_SESSION['user_id'])){
      $builder = $this->db->table('users as u');
      $builder->join('employees as e','e.employee_id = u.user_employee_id' );
      $builder->select('*');
      $builder->where('user_id = '.$_SESSION['user_id']);
      return $builder->get()->getResultArray();
    }
  }

  public function getMessage($data){

    $session_id = $_SESSION['user_id'];
    $where = "chat_from_id = '$session_id' AND chat_to_id = '$data' OR 
		chat_from_id = '$data' AND chat_to_id = '$session_id'";
    $builder = $this->db->table('chats');
    $builder->select('*');
    $builder->where($where);
    return $builder->get()->getResultArray();
  }

  public function sentMessage($data){
    //$this->db->insert('chats',$data);
  }

}
