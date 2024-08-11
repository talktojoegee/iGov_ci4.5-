<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramConversation extends Model
{
    protected $table            = 'program_conversations';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['pc_program_id','pc_user_id','pc_body'];

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


  public function getProgramConversationById($id){
    $builder = $this->db->table('program_conversations as pc');
    $builder->join('employees as e','e.employee_id = pc.pc_user_id' );
    $builder->join('departments as d','e.employee_department_id = d.dpt_id' );
    $builder->join('positions as p','e.employee_position_id = p.pos_id' );
    $builder->where('pc.pc_program_id = '.$id);
    return $builder->get()->getResultObject();
  }
}
