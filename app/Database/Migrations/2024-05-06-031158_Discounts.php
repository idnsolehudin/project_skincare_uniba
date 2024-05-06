<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Discounts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true
            ],
            'discount_name' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'time_limit' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('discounts');
    }

    public function down()
    {
        $this->forge->dropTable('discounts');
    }
}