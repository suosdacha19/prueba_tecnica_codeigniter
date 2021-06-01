<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'user'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '100',
                        ],
                        'pass'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '255',
                        ],
						'rol'       => [
							'type'       => 'VARCHAR',
							'constraint' => '255',
					],
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('users');
        }

        public function down()
        {
                $this->forge->dropTable('users');
        }
}
