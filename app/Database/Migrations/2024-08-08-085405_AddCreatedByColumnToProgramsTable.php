<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCreatedByColumnToProgramsTable extends Migration
{
    public function up()
    {
      $fields = [
        'program_created_by' => [
          'type' => 'INT',
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
