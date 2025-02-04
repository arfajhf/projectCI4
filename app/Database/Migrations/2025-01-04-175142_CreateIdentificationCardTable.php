<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateIdentificationCardTable extends Migration
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
            'place_of_birth' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'date_of_birth' => [
                'type' => 'DATE',
            ],
            'addres' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'religion' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'marital_status' => [
                'type' => 'TINYINT',
            ],
            'job' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nationality' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'identity_number' => [
                'type' => 'CHAR',
                'constraint' => 16
            ],
            'blood_type' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('admin_id', 'admins', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('identificationcards');    
    }

    public function down()
    {
        //
    }
}
