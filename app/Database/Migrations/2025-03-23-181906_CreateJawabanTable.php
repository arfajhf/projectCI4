<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJawabanTable extends Migration
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
            'kuisioner_id' => [
                'type' => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'jawaban' => [
                'type' => 'INT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('admin_id', 'admins', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('kuisioner_id', 'kuisioners', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('jawabans');
    }

    public function down()
    {
        //
    }
}
