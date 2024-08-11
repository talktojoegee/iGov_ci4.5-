<?php

namespace App\Models;

use CodeIgniter\Model;

class CashRetirementMaster extends Model
{
    protected $table            = 'cash_retirement_masters';
    protected $primaryKey       = 'crm_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['crm_subject','crm_type','crm_amount_obtained','crm_amount_retired','crm_balance',
      'crm_payable_to','crm_purpose','crm_status', 'crm_approved_by', 'crm_date_approved', 'crm_url', 'crm_created_by'];


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


  public function getCashRetirementById($id){
    $builder = $this->db->table('cash_retirement_masters as crm');
    $builder->where('crm.crm_id = '.$id);
    return $builder->get()->getFirstRow();
  }

  public function getAllEmployeeRetirements($empId){
    $builder = $this->db->table('cash_retirement_masters as cr');
    $builder->join('employees as e','e.employee_id = cr.crm_payable_to' );
    $builder->orderBy('cr.crm_id', 'DESC');
    return $builder->get()->getResultArray();
  }
  public function getCashRetirementByUrl($url){
    $builder = $this->db->table('cash_retirement_masters as cr');
    $builder->join('employees as e','e.employee_id = cr.crm_payable_to' );
    $builder->join('departments as d','e.employee_department_id = d.dpt_id' );
    $builder->join('positions as p','e.employee_position_id = p.pos_id' );
    $builder->where("cr.crm_url = '".$url."'");
    return $builder->get()->getFirstRow();
  }

  public  function getCreatedBy($id){
    $builder = $this->db->table('cash_retirement_masters as crm');
    $builder->join('employees as e','e.employee_id = crm.crm_payable_to' );
    $builder->where('crm.crm_id = '.$id);
    //$builder->where('p.program_created_by = '.$userId);
    return $builder->get()->getFirstRow();
  }

}
