<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Ci4ajaxtable extends Migration
{

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'firstName' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'lastName' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'created_at' => [
                'type'       => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
                'null' => false,
            ],
            'updated_at' => [
                'type'       => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('email');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
