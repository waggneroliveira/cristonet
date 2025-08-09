<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    protected static ?string $password;

    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => 'Wagner Oliveira',
            'email' => 'waggner.dev@gmail.com',
            'password' => '$2y$12$HK.V4hsv1XLgO66Yo55sJ.JGENt/7UlHdlftx.FOlPm30Rlh43wta',
            'active' => 1,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
