<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRequestChainTable extends Migration
{
    public function up()
    {
      $this->db->disableForeignKeyChecks();
      $this->forge->addField(
        [
          'rc_id' =>[
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => true,
          ],
          'rc_type' =>[
            'type' => 'VARCHAR',
            'constraint'=>191,
            'null'=>true,
            'comment'=>'program,project,requisition'
          ],
          'rc_emp_id' =>[
            'type' => 'INT',
            'null'=>true,
          ], 
          'rc_status' =>[
            'type' => 'INT',
            'null'=>true,
            'default'=>0,
            'comment'=>'0=pending,1=approved,2=declined'
          ],
          'rc_final' =>[
            'type' => 'INT',
            'null'=>true,
            'default'=>0,
            'comment'=>'0=no,1=yes'
          ],    
          'rc_item_id' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'created_at datetime default current_timestamp',

        ]
      );
      $this->forge->addKey('rc_id', true);
      $this->forge->createTable('request_chains');
    }

    public function down()
    {
        //
    }
}
