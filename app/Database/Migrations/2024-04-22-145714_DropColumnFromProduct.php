<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropColumnFromProduct extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('product','id');
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
