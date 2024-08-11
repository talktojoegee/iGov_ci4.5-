<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CashRetirementComments extends Migration
{
    public function up()
    {
      $this->db->disableForeignKeyChecks();
      $this->forge->addField(
        [
          'crc_id' =>[
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => true,
          ],
          'crc_comment' =>[
            'type' => 'TEXT',
            'null'=>true,
          ],
          'crc_user_id' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'crc_master_id' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'created_at datetime default current_timestamp',

        ]
      );
      $this->forge->addKey('crc_id', true);
      $this->forge->createTable('cash_retirement_comments');
    }

    public function down()
    {
        //
    }
}
