<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Producto::class;

    public function definition(Faker $faker)
    {
        return [
            'nombre' => $faker->text(), // Genera un texto de hasta 50 caracteres
            'precio' => $faker->randomNumber(), // Genera un número aleatorio de hasta 4 dígitos
            'imagen' => $faker->imageUrl(), // Genera una URL de imagen aleatoria
        ];
    }
}
