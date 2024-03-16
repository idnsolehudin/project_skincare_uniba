<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'product_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'product_type_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
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
