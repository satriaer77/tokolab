<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Toko extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_toko' => [
                'type'           => 'INT',
                'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
                'null'           => false
            ],
            'nama_toko' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => false
            ],
            'deskripsi_toko' => [
                'type'           => 'TEXT',
                'null'           => true
            ],
            'alamat_toko' => [
                'type'           => 'TEXT',
                'null'           => true
            ],
            'jenis_toko' => [
                'type'           => 'TINYINT',
                'constraint'     => 1,
                'null'           => false,
                'default'        => 0
            ],
            'foto_toko' => [
                'type'           => 'VARCHAR',
                'constraint'     => 25,
                'default'        => 'foto_toko.png',
            ],
            'logo_toko' => [
                'type'           => 'VARCHAR',
                'constraint'     => 25,
                'default'        => 'logo_toko.png',
            ],
            'id_pemilik' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => false
            ],
        ]);

        $this->forge->addKey('id_toko', true);
        $this->forge->addForeignKey('id_pemilik', 'pemilik', 'id_pemilik', 'CASCADE', 'CASCADE');
        $this->forge->createTable('toko');

    }

    public function down()
    {
        $this->forge->dropTable('toko');
    }
}
