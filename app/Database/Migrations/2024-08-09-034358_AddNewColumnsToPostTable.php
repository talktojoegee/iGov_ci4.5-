<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNewColumnsToPostTable extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $fields = [
            'p_review_status' => [
                'type' => 'BOOLEAN',
                'default' => 0,
            ],
            'p_final_review_by' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'p_requires_approval' => [
                'type' => 'BOOLEAN',
                'default' => 0,
            ],
            'p_approval_status' => [
                'type' => 'BOOLEAN',
                'default' => 0,
            ],
            'p_approved_by' => [
                'type' => 'INT',
                'constraint' => 11,
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
