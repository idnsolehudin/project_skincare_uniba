<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'order_id' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'product_detail_id' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'qty' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'price_total' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        // $this->forge->addForeignKey('order_id', 'order','id');
        // $this->forge->addForeignKey('product_detail_id', 'product_detail','id');
        $this->forge->createTable('order_detail');
    
    }

    public function down()
    {
        $this->forge->dropTable('order_detail');
    }
}
