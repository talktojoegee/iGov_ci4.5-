<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddHodStatusToEmployeesTable extends Migration
{
    public function up()
    {
      $fields = [
        'employee_hod' => [
          'type' => 'INT',
          'null'=>true,
          'default'=>0,
          'comment'=>'0=not HOD,1=HOD'
        ],
      ];
      $this->forge->addColumn('employees', $fields);
    }

    public function down()
    {
        //
    }
}
