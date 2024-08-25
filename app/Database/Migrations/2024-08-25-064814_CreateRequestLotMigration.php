<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRequestLotMigration extends Migration
{
    public function up()
    {
      $this->db->disableForeignKeyChecks();
      $this->forge->addField(
        [
          'rl_id' =>[
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => true,
          ],
          'rl_from' =>[
            'type' => 'DATETIME',
            'null'=>true,
          ],
          'rl_to' =>[
            'type' => 'DATETIME',
            'null'=>true,
          ],
          'rl_by' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'rl_persons' =>[
            'type' => 'TEXT',
            'null'=>true,
          ],
          'rl_note' =>[
            'type' => 'TEXT',
            'null'=>true,
          ],
          'rl_status' =>[
            'type' => 'INT',
            'null'=>true,
            'default'=>0,
          'comment'=>'0=pending,1=approved,2=declined'
          ], 'rl_vehicle' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'created_at datetime default current_timestamp',

        ]
      );
      $this->forge->addKey('rl_id', true);
      $this->forge->createTable('request_lots');
    }

    public function down()
    {
        //
    }
}
