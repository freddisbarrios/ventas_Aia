<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inmueble>
 */
class InmuebleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_producto'=>fake()->word(),
            'descripcion'=>fake()->text(),
            'precio'=>fake()->numberBetween(10000000,500000000),
            'stock'=>fake()->numberBetween(1,100),
            'imagen'=>fake()->text(20,30),
            'pais'=>fake()->word(),
            'ciudad'=>fake()->word(),
            'lugar'=>fake()->word(),
            'estrato'=>fake()->numberBetween(1,20),
            

                ];
    }
}
