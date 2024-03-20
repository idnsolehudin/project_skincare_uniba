<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Wishlist extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'product_detail_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'product_id' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'price' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'qty' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'price_total' => [
                'type' => 'INT',
                'constraint' => 11
            ],
        ]);
        $this->forge->addKey('product_detail_id', true);
        // $this->forge->addForeignKey('product_id', 'product','id');
        // $this->forge->addForeignKey('product_detail_id', 'product_detail','id');
        $this->forge->createTable('wishlist');
    
    }

    public function down()
    {
        $this->forge->dropTable('wishlist');
    }
}
