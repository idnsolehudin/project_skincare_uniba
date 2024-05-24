<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDiscountToProductDetails extends Migration
{
    public function up()
    {
        $this->forge->addColumn('product_details', [
            'discount' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true,
            ],
            'discount_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ]
        ]);
    }

    public function down()
    {
        // Menghapus kolom `address` jika rollback
        $this->forge->dropColumn('product_details', 'discount');
        $this->forge->dropColumn('product_details', 'discount_name');
    }
}
