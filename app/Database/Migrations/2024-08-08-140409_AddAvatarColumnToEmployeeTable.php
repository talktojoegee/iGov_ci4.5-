<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAvatarColumnToEmployeeTable extends Migration
{
    public function up()
    {
      $fields = [
        'employee_avatar' => [
          'type' => 'VARCHAR',
          'constraint' => '191',
          'null'=>true,
          'default'=>'avatar.png'
        ],
      ];
      $this->forge->addColumn('employees', $fields);
    }

    public function down()
    {
        //
    }
}
