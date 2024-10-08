<?php

namespace App\Models;

use CodeIgniter\Model;

class Employee extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'employees';
	protected $primaryKey           = 'employee_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['employee_id', 'employee_f_name', 'employee_l_name', 'employee_o_name', 'employee_sex', 'employee_dob', 'employee_level', 'employee_step', 'employee_department_id',
    'employee_position_id','employee_address', 'employee_mail', 'employee_phone', 'employee_signature', 'employee_avatar' ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

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

    public function getEmployeeByUserEmployeeId($user_employee_id){
      $builder = $this->db->table('employees');
      $builder->where('employee_id', $user_employee_id);
      $builder->join('users', 'users.user_employee_id = employees.employee_id');
      $builder->join('departments', 'departments.dpt_id = employees.employee_department_id');
      $builder->join('positions', 'positions.pos_id = employees.employee_position_id');
      return $builder->get()->getRowArray();
    }

    public function getEmployeeDetailsByUserEmployeeId($user_employee_id)
    {
        $builder = $this->db->table('employees');
        $builder->where('employee_id', $user_employee_id);
        $builder->join('departments', 'departments.dpt_id = employees.employee_department_id');
        $builder->join('positions', 'positions.pos_id = employees.employee_position_id');
        return $builder->get()->getResultArray();
    }

    public function getAllEmployee()
    {
        return Employee::findAll();
    }
    public function getAllHODs(){
        return Employee::where('employee_hod = 1')->findAll();
    }
    public function getAllEmployeeExceptAuthUser($user){
      $builder = $this->db->table('employees as e');
      $builder->join('departments as d','d.dpt_id = e.employee_department_id' );
      $builder->where('e.employee_id != '.$user);
      return $builder->get()->getResultArray();

    }

    public function getUserByDepartmentNEmployeeId($department, $id)
    {
        return Employee::where('employee_id', $id)->where('employee_department_id', $department)->first();
    }

    public function getAllEmployeesWithPermission($permission): array
    {
        $builder = $this->db->table('employees');
        $builder->join('users', 'users.user_employee_id = employees.employee_id');
        $builder->join('user_permissions', 'user_permissions.user_id = users.user_id');
        $builder->join('departments', 'departments.dpt_id = employees.employee_department_id');
        $builder->join('positions', 'positions.pos_id = employees.employee_position_id');
        $builder->where('user_permissions.permission', $permission);
        return $builder->get()->getResultArray();
    }

    public function getAllEmployeesInDepartmentWithPermission($department, $permission): array
    {
        $builder = $this->db->table('employees');
        $builder->join('users', 'users.user_employee_id = employees.employee_id');
        $builder->join('user_permissions', 'user_permissions.user_id = users.user_id');
        $builder->join('departments', 'departments.dpt_id = employees.employee_department_id');
        $builder->join('positions', 'positions.pos_id = employees.employee_position_id');
        $builder->where('departments.dpt_id', $department);
        $builder->where('user_permissions.permission', $permission);
        return $builder->get()->getResultArray();
    }

}
