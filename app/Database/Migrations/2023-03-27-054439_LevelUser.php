<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LevelUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_level' => [
                'type'           => "TINYINT",
                'constraint'     => 5,
                'unsigned'       => true,
				'auto_increment' => true,
                'null'           => false
            ],
            'nama_level' => [
                'type' => "VARCHAR",
                'constraint' => 15,
            ],

        ]);

        $this->forge->addKey('id_level');
    }

    public function down()
    {
        $this->forge->dropTable('level_user');
    }
}
