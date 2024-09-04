<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGdocsAuthorizersTable extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'g_doc_auth_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'g_doc_auth_doc_id' => [
                'type' => 'INT',
            ],
            'g_doc_auth_user_id' => [
                'type' => 'INT',
            ],
            'g_doc_auth_status' => [
                'type' => 'INT',
                'comment' => '0 - pending, 1 - cancelled, 2 - reviewed',
                'default' => 0,
            ],
            'g_doc_auth_comment' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'g_doc_auth_status_at' => [
                'type' => 'DATETIME',
            ],
            'created_at datetime default current_timestamp'
        ]);

        $this->forge->addKey('g_doc_auth_id', true);
        $this->forge->createTable('g_docs_authorizers');
    }

    public function down()
    {
        //
    }
}
