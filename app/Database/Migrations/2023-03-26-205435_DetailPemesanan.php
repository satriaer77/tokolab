<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailPemesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detail_pemesanan' => [
                'type'           => 'INT',
                'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
                'null'           => false
            ],
            'id_pemesanan' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'constraint'     => 11,
            ],
            'id_produk' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'constraint'     => 11,
            ],
            'jumlah' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ]
        ]);

        $this->forge->addKey('id_detail_pemesanan', true);
        $this->forge->addForeignKey('id_pemesanan', 'pemesanan', 'id_pemesanan', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_produk', 'produk', 'id_produk', 'CASCADE', 'CASCADE');
        $this->forge->createTable('detail_pemesanan');

    }

    public function down()
    {
        $this->forge->dropTable('detail_pemesanan');
    }
}
