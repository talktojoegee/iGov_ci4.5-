<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgramConversationTable extends Migration
{
    public function up()
    {
      $this->db->disableForeignKeyChecks();
      $this->forge->addField(
        [
          'pc_id' =>[
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => true,
          ],
          'pc_program_id' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'pc_user_id' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'pc_body' =>[
            'type' => 'TEXT',
            'null'=>true,
          ],
          'created_at datetime default current_timestamp',

        ]
      );
      $this->forge->addKey('pc_id', true);
      $this->forge->createTable('program_conversations');
    }

    public function down()
    {
        //
    }
}
