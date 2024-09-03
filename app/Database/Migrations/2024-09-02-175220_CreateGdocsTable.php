<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGdocsTable extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'g_doc_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'g_doc_ref' => [
                'type' => 'TEXT',
            ],
            'g_doc_title' => [
                'type' => 'TEXT',
            ],
            'g_doc_comment' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'g_doc_upload' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'g_doc_uploaded_by' => [
                'type' => 'INT',
            ],
            'g_doc_last_status_update_by' => [
                'type' => 'INT',
            ],
            'g_doc_status' => [
                'type' => 'INT',
                'comment' => '0 - inactive, 1 - active',
                'default' => 1,
            ],
            'created_at datetime default current_timestamp'
        ]);

        $this->forge->addKey('g_doc_id', true);
        $this->forge->createTable('g_docs');
    }

    public function down()
    {
        //
    }
}
