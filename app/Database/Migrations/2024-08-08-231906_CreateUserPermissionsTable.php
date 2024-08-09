<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserPermissionsTable extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField(
            [
                'permission_id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'auto_increment' => true,
                ],
                'user_id' => [
                    'type' => 'INT',
                ],
                'permission' => [
                    'type' => 'TEXT',
                ],
                'created_at datetime default current_timestamp',
            ]
        );

        $this->forge->addKey('permission_id', true);
        $this->forge->createTable('user_permissions');
    }

    public function down()
    {
        //
    }
}
