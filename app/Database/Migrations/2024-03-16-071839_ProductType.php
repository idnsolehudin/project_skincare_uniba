<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductType extends Migration
{ public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'VARCHAR',
                'constraint'     => 11
            ],
            'kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('product_type');
    
    }

    public function down()
    {
        $this->forge->dropTable('product_type');
    }
}
