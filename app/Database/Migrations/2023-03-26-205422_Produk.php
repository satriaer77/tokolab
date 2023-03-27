<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produk' => [
                'type'           => 'INT',
                'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
                'null'           => false
            ],
            'nama_produk' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null'           => false
            ],
            'harga_produk' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => false
            ],
            'kategori_produk' => [
                'type'           => 'TINYINT',
                'constraint'     => 10,
                'default'        => 0,
                'null'           => false
            ],
            'foto_produk' => [
                'type'           => 'VARCHAR',
                'constraint'     => 25,
                'default'        => 'foto_produk.png',
                'null'           => false
            ],
            'id_toko' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => false
            ]
        ]);

        $this->forge->addKey('id_produk', true);
        $this->forge->addForeignKey('id_toko', 'toko', 'id_toko', 'CASCADE', 'CASCADE');
        $this->forge->createTable('produk');

    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
