<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDriverToRequestLotsTable extends Migration
{
    public function up()
    {
      $fields = [
        'rl_driver' => [
          'type' => 'INT',
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
