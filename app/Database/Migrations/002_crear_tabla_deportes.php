<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration_crear_tabla_deportes extends Migration
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
                        'constraint' => '255',
                ],
                'estado' => [
                        'type' => 'CHAR',
                        'constraint' => '1',
                        'default' => '1',
                        'comment' => '0-Inactivo, 1-Activo',
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
        $this->forge->createTable('deportes');
        }

        //--------------------------------------------------------------------

        public function down()
        {
                $this->forge->dropTable('deportes');
        }
}
