<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddOnlineStatusColumnToUsersTable extends Migration
{
    public function up()
    {
      $this->db->disableForeignKeyChecks();
      $fields = [
        'user_online' => [
          'type' => 'VARCHAR',
          'constraint'=>30,
          'null' => true,
          'default'=>'offline',
          'comment'=>'active,offline'
        ],
      ];
      $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        //
    }
}
