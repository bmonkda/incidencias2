<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Incident;
use Illuminate\Database\Seeder;

class IncidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $incidents = Incident::factory(20)->create();
        foreach ($incidents as $incident) {
            Image::factory(1)->create([
                'imageable_id' => $incident->id,
                'imageable_type' => Incident::class
            ]);
        }
    }
}
