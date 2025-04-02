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
            'layanan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'usia' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pendidikan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pekerjaan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jawaban1' => [
                'type' => 'INT',
            ],
            'jawaban2' => [
                'type' => 'INT',
            ],
            'jawaban3' => [
                'type' => 'INT',
            ],
            'jawaban4' => [
                'type' => 'INT',
            ],
            'jawaban5' => [
                'type' => 'INT',
            ],
            'jawaban6' => [
                'type' => 'INT',
            ],
            'jawaban7' => [
                'type' => 'INT',
            ],
            'jawaban8' => [
                'type' => 'INT',
            ],
            'jawaban9' => [
                'type' => 'INT',
            ],
            'created_at'   => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at'   => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('jawabans');
    }

    public function down()
    {
        //
    }
}
