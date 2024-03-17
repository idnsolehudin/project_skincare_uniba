<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'username' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'customer_detail_id' => [
                'type'           => 'INT',
                'constraint'     => 11
            ]
        ]);
        $this->forge->addKey('id', true);
        // $this->forge->addForeignKey('customer_detail_id', 'customer_detail','id');
        $this->forge->createTable('customer');
    
    }

    public function down()
    {
        $this->forge->dropTable('customer');
    }
}
