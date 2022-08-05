<?php

namespace Database\Factories;

use App\Models\Emergency;
use App\Models\Estatu;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class IncidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'titulo' => $this->faker->text(150),
            'description' => $this->faker->text(2000),
            'user_id' => User::all()->random()->id,
            'subcategory_id' => Subcategory::all()->random()->id,
            'emergency_id' => Emergency::all()->random()->id,
            'estatu_id' => Estatu::all()->random()->id,
        ];
    }
}
