<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestChain extends Model
{
    protected $table            = 'request_chains';
    protected $primaryKey       = 'rc_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['rc_type','rc_emp_id','rc_status','rc_final', 'rc_item_id'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    
   /* public  function getRequestChain($type, $itemId){
      return RequestChain::where('rc_item_id = '.$itemId)->where("rc_type", $type)->findAll();
    }*/

  public  function getRequestChain($type, $itemId){
    $builder = $this->db->table('request_chains as rc');
    $builder->join('employees as e','e.employee_id = rc.rc_emp_id' );
    $builder->join('positions as p','e.employee_position_id = p.pos_id' );
    $builder->join('departments as d','e.employee_department_id = d.dpt_id' );
    $builder->where('rc.rc_item_id = '.$itemId);
    $builder->where('rc.rc_type ', $type);
    return $builder->get()->getResultObject();
  }
}
