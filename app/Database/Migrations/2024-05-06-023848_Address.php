<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Address extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true
            ],
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'village' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'district' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'province' => [
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
        $this->forge->createTable('addresses');
    }

    public function down()
    {
        $this->forge->dropTable('adresses');
    }
}
