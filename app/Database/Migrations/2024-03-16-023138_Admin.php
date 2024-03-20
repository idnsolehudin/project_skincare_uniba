<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;



use DateTime;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admin');
    
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}
