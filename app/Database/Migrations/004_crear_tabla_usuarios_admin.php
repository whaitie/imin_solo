<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_crear_tabla_usuarios_admin extends Migration
{
        public function up()
        {
        $this->forge->addField([
                'id' => [
                        'type' => 'INT',
                        'constraint' => '11',
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                ],
                'nombre' => [
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                ],
                'usuario' => [
                        'type' => 'VARCHAR',
                        'constraint' => '50',
                ],
                'password' => [
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                ],
                'email' => [
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                ],
                'estado' => [
                        'type' => 'CHAR',
                        'constraint' => '1',
                        'default' => '1',
                        'comment' => '0-Inactivo, 1-Activo',
                ],
                'ultimo_logueo' => [
                        'type' => 'DATETIME',
                        'default' => '0000-00-00 00:00:00',
                ],
                'created_at' => [
                        'type' => 'DATETIME',
                        'default' => '0000-00-00 00:00:00',
                ],
                'updated_at' => [
                        'type' => 'DATETIME',
                        'default' => '0000-00-00 00:00:00',
                ],
                'deleted' => [
                        'type' => 'CHAR',
                        'constraint' => '1',
                        'default' => '0',
                ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('usuarios_admin');

        $data = [
                'nombre' => 'Administrador',
                'usuario' => 'admin',
                'password' => password_hash('admin', PASSWORD_DEFAULT),
                'email' => 'admin@hosting.com',
        ];

        $this->db->table('usuarios_admin')->insert($data);
        }

        //--------------------------------------------------------------------

        public function down()
        {
                $this->forge->dropTable('usuarios_admin');
        }
}
