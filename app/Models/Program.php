<?php

namespace App\Models;

use CodeIgniter\Model;

class Program extends Model
{
    protected $table            = 'programs';
    protected $primaryKey       = 'program_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['program_id','program_priority','program_status', 'program_description',
      'program_name','program_manager_id', 'program_start_date', 'program_end_date','program_budget',
      'program_created_by'];

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

    public function getAllPrograms(){
      $builder = $this->db->table('programs as p');
      //$builder->join('employees as e','e.employee_id = p.program_manager_id' );
      $builder->orderBy('p.program_id', 'DESC');
      return $builder->get()->getResultArray();
    }
  
    public function getProgramById($id){
      $builder = $this->db->table('programs as p');
      //$builder->join('employees as e','e.employee_id = p.program_manager_id' );
      $builder->where('p.program_id = '.$id);
      return $builder->get()->getFirstRow();
    }

    public  function getProgramManager($programId){
      $builder = $this->db->table('programs as p');
      $builder->join('employees as e','e.employee_id = p.program_manager_id' );
      $builder->where('p.program_id = '.$programId);
      //$builder->where('e.employee_id = '.$userId);
      return $builder->get()->getFirstRow();
    }
    public  function getCreatedBy($programId){
      $builder = $this->db->table('programs as p');
      $builder->join('employees as e','e.employee_id = p.program_created_by' );
      $builder->where('p.program_id = '.$programId);
      //$builder->where('p.program_created_by = '.$userId);
      return $builder->get()->getFirstRow();
    }
}
