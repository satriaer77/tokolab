<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BuktiPembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bukti' => [
                'type'           => 'INT',
                'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
                'null'           => false
            ],
            'id_pemesanan' => [
                'type'           => 'INT',
                'constraint'     => 11,
				'unsigned'       => true,
                'null'           => false
            ],
            'waktu_kirim' => [
                'type'           => 'DATETIME',
                'null'           => false
            ],
            'file_bukti' => [
                'type'           => 'VARCHAR',
                'constraint'     => 25,
                'null'           => false
            ],

            
        ]);

        $this->forge->addKey('id_bukti', true);
        $this->forge->addForeignKey('id_pemesanan', 'pemesanan', 'id_pemesanan', 'CASCADE', 'CASCADE');
        $this->forge->createTable('bukti_pembayaran');

    }

    public function down()
    {
        $this->forge->dropTable('bukti_pembayaran');
    }
}
