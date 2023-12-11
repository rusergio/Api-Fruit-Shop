<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UsuarioFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'direccion' => $this->faker->address,
            'numero_celular' => $this->faker->phoneNumber,
            'role' => $this->faker->randomElement(['user', 'admin']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    
}
