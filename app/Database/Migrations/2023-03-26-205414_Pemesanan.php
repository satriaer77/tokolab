<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemesanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pemesanan' => [
                'type'           => 'INT',
                'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
                'null'           => false
            ],
            'waktu_pesan' => [
                'type'           => 'DATETIME',
                'null'           => false
            ],
            'selesai' => [
                'type'           => 'TINYINT',
                'constraint'     => 1,
                'default'        => 0,
                'null'           => false
            ],
            'toko_pemesan' => [
                'type'           => 'INT',
                'constraint'     => 11,
				'unsigned'       => true,
                'null'           => false
            ],
            'toko_penerima' => [
                'type'           => 'INT',
                'constraint'     => 11,
				'unsigned'       => true,
                'null'           => false
            ],
        ]);

        $this->forge->addKey('id_pemesanan', true);
        $this->forge->addForeignKey('toko_pemesan', 'toko', 'id_toko', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('toko_penerima', 'toko', 'id_toko', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pemesanan');

    }

    public function down()
    {
        $this->forge->dropTable('pemesanan');
    }
}
