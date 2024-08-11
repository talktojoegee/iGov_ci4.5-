<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CashRetirementAttachments extends Migration
{
    public function up()
    {
      $this->db->disableForeignKeyChecks();
      $this->forge->addField(
        [
          'cra_id' =>[
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => true,
          ],
          'cra_attachment' =>[
            'type' => 'TEXT',
            'null'=>true,
          ],
          'cra_master_id' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'created_at datetime default current_timestamp',

        ]
      );
      $this->forge->addKey('cra_id', true);
      $this->forge->createTable('cash_retirement_attachments');
    }

    public function down()
    {
        //
    }
}
