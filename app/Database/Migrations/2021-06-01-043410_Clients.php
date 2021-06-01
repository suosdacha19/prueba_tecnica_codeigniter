<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clients extends Migration
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
                        'name'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '200',
                        ],
                        'id_document'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '200',
                        ],
						'email'       => [
							'type'       => 'VARCHAR',
							'constraint' => '200',
						],
						'address'       => [
							'type'       => 'VARCHAR',
							'constraint' => '200',
						],
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('clients');
        }

        public function down()
        {
                $this->forge->dropTable('clients');
        }
}
