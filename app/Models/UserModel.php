<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['user_id', 'user_name', 'user_password', 'user_username', 'user_email', 'user_phone', 'user_employee_id',
        'user_status', 'user_type'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = ["beforeInsert"];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];


    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data)
    {
        if (isset($data['data']['user_password'])) :
            $data['data']['user_password'] = password_hash($data['data']['user_password'], PASSWORD_DEFAULT);
        endif;

        return $data;
    }

    public function getAllUsers()
    {
        return UserModel::findAll();
    }

    public function getAllUserData($user_id)
    {
        $builder = $this->db->table('users');
        $builder->select('users.*, employees.*, departments.dpt_name, positions.pos_name');
        $builder->join('employees', 'employees.employee_id = users.user_employee_id');
        $builder->join('departments', 'departments.dpt_id = employees.employee_department_id');
        $builder->join('positions', 'positions.pos_id = employees.employee_position_id');
        $builder->where('users.user_id', $user_id);
        return $builder->get()->getRowArray();
    }


}
