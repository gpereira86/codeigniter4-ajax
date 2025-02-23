<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Post extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'       => 'INT',
                'unsigned'       => true,
                'null' => false,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'content' => [
                'type'       => 'TEXT',
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
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
