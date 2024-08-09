<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNewColumnsToPostTable2 extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $fields = [
            'p_reviewers_id' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ];
        $this->forge->addColumn('posts', $fields);
    }

    public function down()
    {
        //
    }
}
