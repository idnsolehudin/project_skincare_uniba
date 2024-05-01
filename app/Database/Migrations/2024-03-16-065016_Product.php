<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'VARCHAR',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'nama_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'id_kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('product_type_id', 'product_type','id');
        $this->forge->createTable('product');
    
    }

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
