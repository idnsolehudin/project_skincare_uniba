<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11
            ],
            'product_id' => [
                'type'           => 'INT',
                'constraint'     => 11
            ],
            'product_type_id' => [
                'type'           => 'INT',
                'constraint'     => 11
            ],
            'qty' => [
                'type'           => 'INT',
                'constraint'     => 11
            ],
            'price' => [
                'type'           => 'INT',
                'constraint'     => 11
            ],
            'varian' => [
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
        // $this->forge->addForeignKey('product_id', 'product','id');
        $this->forge->createTable('product_detail');
    
    }

    public function down()
    {
        $this->forge->dropTable('product_detail');
    }
}
