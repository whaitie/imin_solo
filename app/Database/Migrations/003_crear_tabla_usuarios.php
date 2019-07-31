<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_crear_tabla_usuarios extends Migration
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
                'nombre' => [
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                ],
                'apellido' => [
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                ],
                'dni' => [
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                ],
                'avatar' => [
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                        'default' => NULL
                ],
                'genero' => [
                        'type' => 'CHAR',
                        'constraint' => '1',
                        'default' => '0',
                        'comment' => '0-Sin elegir, 1-Masculino, 2- Femenino',
                ],
                'fecha_nacimiento' => [
                        'type' => 'DATE',
                ],
                'id_pais_nac' => [
                        'type' => 'INT',
                        'constraint' => '11',
                        'unsigned' => TRUE
                ],
                'id_pais_res' => [
                        'type' => 'INT',
                        'constraint' => '11',
                        'unsigned' => TRUE
                ],
                'provincia' => [
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                ],
                'calle' => [
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                ],
                'numero' => [
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                ],
                'id_deporte' => [
                        'type' => 'VARCHAR',
                        'constraint' => '255',
                ],
                'tipo_cuenta' => [
                        'type' => 'CHAR',
                        'constraint' => '1',
                        'comment' => '1-Deportista, 2-Club, 3-Periodista',
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
                ],
                'updated_at' => [
                        'type' => 'DATETIME',
                ],
                'deleted' => [
                        'type' => 'CHAR',
                        'constraint' => '1',
                        'default' => '0',
                ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('usuarios');
        $this->db->query('ALTER TABLE `usuarios` ADD FOREIGN KEY(`id_pais_nac`) REFERENCES `paises`(`id`) ON UPDATE CASCADE;');
        $this->db->query('ALTER TABLE `usuarios` ADD FOREIGN KEY(`id_pais_res`) REFERENCES `paises`(`id`) ON UPDATE CASCADE;');
        $this->db->query('ALTER TABLE `usuarios` ADD FOREIGN KEY(`id_deporte`) REFERENCES `deportes`(`id`) ON UPDATE CASCADE;');
        }

        //--------------------------------------------------------------------

        public function down()
        {
                $this->forge->dropTable('usuarios');
        }
}
