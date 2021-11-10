<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName('male'|'female'),
            'ape_paterno' => $this->faker->lastName,
            'ape_materno' => $this->faker->lastName,
            'edad' => $this->faker->numberBetween(18, 50)
            //
        ];
    }
}
