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
                'constraint'     => 11,
                'unsigned'       => true
            ],
            'id_product' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true
            ],
            'rating' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true
            ],
            'variant' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ],
            'slug' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ],
            'image' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ],
            'stock' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned'       => true
            ],
            'price' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned'       => true
            ],
            'description' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
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
        $this->forge->createTable('product_details');
    }

    public function down()
    {
        $this->forge->dropTable('product_details');
    }
}
