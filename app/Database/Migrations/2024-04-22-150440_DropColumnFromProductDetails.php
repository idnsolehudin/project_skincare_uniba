<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropColumnFromProductDetails extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('product_detail','id','product_id','product_type_id','qty','price');
    }

    public function down()
    {
        $this->forge->addColumn('product', [
            'id_kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
        ]);
    }
}
