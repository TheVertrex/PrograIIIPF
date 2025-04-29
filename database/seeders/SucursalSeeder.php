<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalSeeder extends Seeder
{
    public function run()
    {
        DB::table('sucursales')->insert([
            ['nombre' => 'Puerto Barrios', 'ubicacion' => 'Izabal'],
            ['nombre' => 'Morales', 'ubicacion' => 'Izabal'],
            ['nombre' => 'El Estor', 'ubicacion' => 'Izabal'],
            ['nombre' => 'Amates', 'ubicacion' => 'Izabal'],
        ]);
    }
}