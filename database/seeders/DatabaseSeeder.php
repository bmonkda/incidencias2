<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Emergency;
use App\Models\Estatu;
use App\Models\Incident;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // borrado y creación del directorio storage/app/public/empleos
        Storage::deleteDirectory('incidencias');
        Storage::makeDirectory('incidencias');

        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Subcategory::factory(50)->create();
        Emergency::factory(3)->create();
        Estatu::factory(4)->create();
        $this->call(IncidentSeeder::class);
        
    }
}
