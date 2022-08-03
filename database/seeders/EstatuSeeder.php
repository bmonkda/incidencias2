<?php

namespace Database\Seeders;

use App\Models\Estatu;
use Illuminate\Database\Seeder;

class EstatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estatu = Estatu::create([
            'name' => 'EN ESPERA',
        ]);

        $estatu = Estatu::create([
            'name' => 'ASIGNADA',
        ]);

        $estatu = Estatu::create([
            'name' => 'CERRADA (RESUELTA)',
        ]);
        
        $estatu = Estatu::create([
            'name' => 'CERRADA (NO RESUELTA)',
        ]);

    }
}
