<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskAttachment extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'task_attachments';
	protected $primaryKey           = 'ta_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
	  'ta_task_id',
	  'ta_uploader_id',
	  'ta_link',
  ];

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


  public function getUploadedBy($attachmentId, $empId){
    $builder = $this->db->table('employees as e');
    $builder->join('task_attachments as ta', 'e.employee_id = ta.ta_uploader_id');
    $builder->where('ta.ta_id = '.$attachmentId);
    $builder->where('ta.ta_uploader_id = '.$empId);
    return $builder->get()->getResultArray();
  }
}
