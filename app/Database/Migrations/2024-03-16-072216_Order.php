<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'order_date' => [
                'type'       => 'DATETIME'
            ],
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ]
        ]);
        $this->forge->addKey('id', true);
        // $this->forge->addForeignKey('customer_id', 'customer','id');
        $this->forge->createTable('order');
    
    }

    public function down()
    {
        $this->forge->dropTable('order');
    }
}
