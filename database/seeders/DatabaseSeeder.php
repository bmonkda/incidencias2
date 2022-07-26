<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Emergency;
use App\Models\Estatu;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

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

        Category::factory(4)->create();
        Subcategory::factory(50)->create();
        Emergency::factory(3)->create();
        Estatu::factory(4);
        $this->call(UserSeeder::class);
        
    }
}
