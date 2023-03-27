<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemilik extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pemilik' => [
                'type'           => 'INT',
                'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
                'null'           => false
            ],
            'nama_pemilik' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => false
            ],
            'username' => [
                'type'           => 'VARCHAR',
                'constraint'     => 30,
                'null'           => false
            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null'           => false
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'null'           => true
            ],
            'no_hp' => [
                'type'           => 'VARCHAR',
                'constraint'     => 14,
                'null'           => true
            ],
            'no_hp' => [
                'type'           => 'VARCHAR',
                'constraint'     => 14,
                'null'           => true
            ],
            'foto_profil' => [
                'type'           => 'VARCHAR',
                'constraint'     => 25,
                'default'        => 'foto_profil.png',
                'null'           => false
            ],
            'role'  => [
                'type'           => 'TINYINT',
                'constraint'     => 1,
                'null'           => false,
                'default'        => 0
            ]
        ]);

        $this->forge->addKey('id_pemilik', true);
        $this->forge->createTable('pemilik');

    }

    public function down()
    {
        $this->forge->dropTable('pemilik');
    }
}
