<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramParticipants extends Model
{
    protected $table            = 'program_participants';
    protected $primaryKey       = 'pp_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['pp_program_id','pp_user_id', 'pp_type'];

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


  public function getAllProgramParticipants($programId){
    $builder = $this->db->table('program_participants as pp');
    $builder->join('employees as e','e.employee_id = pp.pp_user_id' );
    $builder->where('pp.pp_program_id = '.$programId);
    return $builder->get()->getResultObject();
  }
}
