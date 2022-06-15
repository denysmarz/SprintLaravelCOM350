<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'nombre' => $this->faker->name(),
            'autor' => $this->faker->name(),
            'estante_id' => $this->faker->numberBetween(1, 4),
            
        ];
    }
}
