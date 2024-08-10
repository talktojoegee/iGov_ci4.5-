<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCashRetirementMasterTable extends Migration
{
    public function up()
    {
      $this->db->disableForeignKeyChecks();
      $this->forge->addField(
        [
          'crm_id' =>[
            'type' => 'INT',
            'constraint' => 11,
            'auto_increment' => true,
          ],
          'crm_subject' =>[
            'type' => 'VARCHAR',
            'constraint'=>191,
            'null'=>true,
          ],
          'crm_type' =>[
            'type' => 'VARCHAR',
            'constraint'=>191,
            'null'=>true,
          ],  
          'crm_status' =>[
            'type' => 'VARCHAR',
            'constraint'=>191,
            'null'=>true,
          ],
          'crm_amount_obtained' =>[
            'type' => 'DOUBLE',
            //'constraint'=>191,
            'default'=>0,
          ],
          'crm_amount_retired' =>[
            'type' => 'DOUBLE',
            //'constraint'=>191,
            'default'=>0,
          ],
          'crm_balance' =>[
            'type' => 'DOUBLE',
            //'constraint'=>191,
            'default'=>0,
          ],
          'crm_payable_to' =>[
            'type' => 'INT',
            //'constraint'=>191,
            'null'=>true,
          ],
          'crm_purpose' =>[
            'type' => 'TEXT',
            //'constraint'=>191,
            'null'=>true,
          ],
          'crm_approved_by' =>[
            'type' => 'INT',
            'null'=>true,
          ],
          'crm_date_approved' =>[
            'type' => 'DATE',
            'null'=>true,
          ],
          'created_at datetime default current_timestamp',

        ]
      );
      $this->forge->addKey('crm_id', true);
      $this->forge->createTable('cash_retirement_masters');
    }

    public function down()
    {
        //
    }
}
