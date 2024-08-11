<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgramAttachmentsTable extends Migration
{
    public function up()
    {
      $this->db->disableForeignKeyChecks();
      $this->forge->addField(
        [
          'pa_id' =>[
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => true,
          ],
          'pa_program_id' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'pa_attachment' =>[
            'type' => 'TEXT',
            'null'=>true,
          ],
          'created_at datetime default current_timestamp',

        ]
      );
      $this->forge->addKey('pa_id', true);
      $this->forge->createTable('program_attachments');
    }

    public function down()
    {
        //
    }
}
