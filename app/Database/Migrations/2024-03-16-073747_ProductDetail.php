<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produk' => [
                'type'           => 'VARCHAR',
                'constraint'     => 11
            ],
            'deskripsi' => [
                'type'           => 'CHAR',
                'constraint'     => 255
            ],
            'harga' => [
                'type'           => 'INT',
                'constraint'     => 11
            ],
            'stok' => [
                'type'           => 'INT',
                'constraint'     => 11
            ],
            'ukuran' => [
                'type'           => 'INT',
                'constraint'     => 11
            ],
            'varian' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
            ],
            'berat' => [
                'type'           => 'INT',
                'constraint'     => 11
            ],
            'dimensi' => [
                'type'           => 'INT',
                'constraint'     => 11
            ],
            'gambar' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
            ],
            'ulasan' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255
            ],
            'id_rating' => [
                'type'           => 'VARCHAR',
                'constraint'     => 11
            ],
            'id_diskon' => [
                'type'           => 'VARCHAR',
                'constraint'     => 11
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
