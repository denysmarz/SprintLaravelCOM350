<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estante>
 */
class EstanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tema' => $this->faker->name(),
            'comlumna' => $this->faker->numberBetween(1, 7),
            'fila' => $this->faker->numberBetween(1, 7),
            'tema_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
