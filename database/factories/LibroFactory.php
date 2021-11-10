<?php

namespace Database\Factories;

use App\Models\Autor;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(),
            'autor_id' => Autor::all()->random()->id,
            'pais' => $this->faker->country(),
            'paginas' => $this->faker->sentence(),
            'generos' => $this->faker->sentence(),
            'estado' => $this->faker->randomElement([1, 2])
            //
        ];
    }
}
