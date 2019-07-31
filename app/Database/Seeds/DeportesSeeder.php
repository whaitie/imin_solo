<?php namespace App\Database\Seeds;

class DeportesSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $deportes = [
                        ['nombre' => 'Fútbol'],
                        ['nombre' => 'Basqket'],
                        ['nombre' => 'Tenis'],
                ];

                foreach ($deportes as $deporte) {
                        $this->db->query("INSERT INTO deportes (nombre) VALUES(:nombre:)", $deporte);
                }
        }
}