<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestLot extends Model
{
    protected $table            = 'request_lots';
    protected $primaryKey       = 'rl_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['rl_from','rl_to','rl_by','rl_persons','rl_note','rl_status', 'rl_vehicle', 'rl_driver',
      'rl_actioned_by', 'rl_date_actioned'];

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

  public  function getRequestLots(){
    $builder = $this->db->table('request_lots as rl');
    $builder->join('employees as e','e.employee_id = rl.rl_driver' );
    $builder->join('fleet_vehicles as fv','fv.fv_id = rl.rl_vehicle' );
    return $builder->get()->getResultArray();
  }

  public  function getRequestLotById($id){
    $builder = $this->db->table('request_lots as rl');
    $builder->join('employees as e','e.employee_id = rl.rl_driver' );
    $builder->join('fleet_vehicles as fv','fv.fv_id = rl.rl_vehicle' );
    $builder->join('fleet_drivers as fd','fd.fd_user_id = rl.rl_driver' );
    $builder->where('rl.rl_id = '.$id);
    return $builder->get()->getFirstRow();
  }
}
