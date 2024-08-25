<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddActionDetailsToRequestLotsTable extends Migration
{
    public function up()
    {
      $fields = [
        'rl_actioned_by' => [
          'type' => 'INT',
          'null'=>true,
        ],
        'rl_date_actioned' => [
          'type' => 'DATETIME',
          'null'=>true,
        ],
      ];
      $this->forge->addColumn('request_lots', $fields);
    }

    public function down()
    {
        //
    }
}
