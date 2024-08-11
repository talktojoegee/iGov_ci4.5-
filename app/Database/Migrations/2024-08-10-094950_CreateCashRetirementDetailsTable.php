<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCashRetirementDetailsTable extends Migration
{
    public function up()
    {
      $this->db->disableForeignKeyChecks();
      $this->forge->addField(
        [
          'crd_id' =>[
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => true,
          ],
          'crd_receipt_no' =>[
            'type' => 'VARCHAR',
            'constraint'=>191,
            'null'=>true,
          ],
          'crd_date' =>[
            'type' => 'VARCHAR',
            'constraint'=>191,
            'null'=>true,
          ],
          'crd_amount' =>[
            'type' => 'DOUBLE',
            //'constraint'=>191,
            'default'=>0,
          ],
          'crd_remark' =>[
            'type' => 'VARCHAR',
            'constraint'=>191,
            'null'=>true,
          ],
          'crd_master_id' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'created_at datetime default current_timestamp',

        ]
      );
      $this->forge->addKey('crd_id', true);
      $this->forge->createTable('cash_retirement_details');
    }

    public function down()
    {
        //
    }
}
