<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKuisionerTable extends Migration
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
            'pertanyaan' => [
                'type' => 'TEXT'
            ],
            'pilihan1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pilihan2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pilihan3' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'pilihan4' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kuisioners');
    }

    public function down()
    {
        //
    }
}
