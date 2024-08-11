<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStatusToProgram extends Migration
{
    public function up()
    {
      $fields = [
        'program_actioned_by' => [
          'type' => 'INT',
          'null'=>true,
        ],
        'program_date_actioned' => [
          'type' => 'DATE',
          'null'=>true,
        ],
      ];
      $this->forge->addColumn('programs', $fields);
    }

    public function down()
    {
        //
    }
}
