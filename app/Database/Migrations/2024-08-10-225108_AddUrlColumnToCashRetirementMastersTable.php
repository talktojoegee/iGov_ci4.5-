<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUrlColumnToCashRetirementMastersTable extends Migration
{
    public function up()
    {
      $fields = [
        'crm_url' => [
          'type' => 'TEXT',
          'null'=>true,
        ],
        'crm_created_by' => [
          'type' => 'INT',
          'null'=>true,
        ],
      ];
      $this->forge->addColumn('cash_retirement_masters', $fields);
    }

    public function down()
    {
        //
    }
}
