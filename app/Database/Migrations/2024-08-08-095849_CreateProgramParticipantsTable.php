<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgramParticipantsTable extends Migration
{
    public function up()
    {
      $this->db->disableForeignKeyChecks();
      $this->forge->addField(
        [
          'pp_id' =>[
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => true,
          ],
          'pp_program_id' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'pp_user_id' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'pp_type' =>[
            'type' => 'INT',
            'null'=>true,
            'comment'=>'1=responsible,2=participant,3=observer'
          ],
          'created_at datetime default current_timestamp',

        ]
      );
      $this->forge->addKey('pp_id', true);
      $this->forge->createTable('program_participants');
    }

    public function down()
    {
        //
    }
}
