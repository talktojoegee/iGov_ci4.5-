<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDepartmentRefCodeToDepartmentsTable extends Migration
{
    public function up()
    {
      $fields = [
        'dpt_ref_no' => [
          'type' => 'VARCHAR',
          'constraint'=>191,
          'null'=>true,
        ],
      ];
      $this->forge->addColumn('departments', $fields);
    }

    public function down()
    {
        //
    }
}
