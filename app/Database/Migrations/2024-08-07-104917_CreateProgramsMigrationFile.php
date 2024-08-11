<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgramsMigrationFile extends Migration
{
    public function up()
    {
      $this->db->disableForeignKeyChecks();
      $this->forge->addField(
        [
          'program_id' =>[
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => true,
          ],
          'program_manager_id' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'program_name' =>[
            'type' => 'TEXT',
            'null'=>true,
          ],
          'program_description' =>[
            'type' => 'TEXT',
            'null'=>true,
          ],
          'program_status' =>[
            'type' => 'INT',
            'null'=>true,
            'comment'=>'0=pending,1=started,2=in-progress,3=completed,4=cancelled,'
          ],
          'program_priority' =>[
            'type' => 'INT',
            'null'=>true,
            'comment'=>'1=normal,2=medium,3=high'
          ],
          'program_start_date' => [
            'type' => 'DATE',
            'null'=>true,
          ],
          'program_end_date' => [
            'type' => 'DATE',
            'null'=>true,
          ],
          'program_budget' => [
            'type' => 'DOUBLE',
            'null'=>true,
            'default'=>0
          ],
          'created_at datetime default current_timestamp',

        ]
      );
      $this->forge->addKey('program_id', true);
      $this->forge->createTable('programs');
    }

    public function down()
    {
        //
    }
}
