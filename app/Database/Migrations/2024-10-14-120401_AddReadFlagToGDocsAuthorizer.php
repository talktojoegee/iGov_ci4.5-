<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddReadFlagToGDocsAuthorizer extends Migration
{
    public function up()
    {
      $fields = [
        'g_doc_read' => [
          'type' => 'INT',
          'null'=>true,
          'default'=>0,
          'comment'=>'0=unread,1=read'
        ],
      ];
      $this->forge->addColumn('g_docs_authorizers', $fields);
    }

    public function down()
    {
        //
    }
}
