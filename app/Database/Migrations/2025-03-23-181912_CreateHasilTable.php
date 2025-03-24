<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHasilTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'admin_id' => [
                'type' => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'cluster' => [
                'type' => 'INT',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('admin_id', 'admins', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('hasils');
    }

    public function down()
    {
        //
    }
}
