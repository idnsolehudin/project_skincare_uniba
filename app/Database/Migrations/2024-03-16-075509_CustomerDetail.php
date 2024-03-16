<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CustomerDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'gender' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'picture' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true
            ],
            'complete_address' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'city_address' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'province_address' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'created_at' => [
                'type'       => 'DATETIME'
            ],
            'updated_at' => [
                'type'       => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('customer_detail');
    
    }

    public function down()
    {
        $this->forge->dropTable('customer_detail');
    }
}
