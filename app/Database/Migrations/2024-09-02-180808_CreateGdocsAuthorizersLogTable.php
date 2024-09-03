<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGdocsAuthorizersLogTable extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'g_doc_auth_log_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'g_doc_auth_log_auth_id' => [
                'type' => 'INT',
            ],
            'g_doc_auth_log_event' => [
                'type' => 'TEXT',
            ],
            'g_doc_auth_log_details' => [
                'type' => 'TEXT',
            ],
            'created_at datetime default current_timestamp'
        ]);

        $this->forge->addKey('g_doc_auth_log_id', true);
        $this->forge->createTable('g_docs_authorizers_logs');
    }

    public function down()
    {
        //
    }
}
