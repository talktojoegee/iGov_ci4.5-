<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUnitsMigrationTableFile extends Migration
{
    public function up()
    {
      $this->db->disableForeignKeyChecks();

      $this->forge->addField(
        [
          'id' =>[
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => true,
          ],

          'unit_name' =>[
            'type' => 'TEXT',
          ],
          'directory_id' =>[
            'type' => 'INT',
          ],



          'updated_at' => [
            'type' => 'datetime',
            'null' => true,
          ],
          'created_at datetime default current_timestamp',




        ]
      );
      $this->forge->addKey('id', true);
      $this->forge->createTable('units');
    }

    public function down()
    {
        //
    }
}
