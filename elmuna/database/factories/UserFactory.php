<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'nama',
            'email' => 'email',
            'password' => static::$password ??= Hash::make('password'),
            'nik'      => date('Ymd').rand(000,999),
            'alamat'   =>  'alamat',
            'tlp'       => 'tlp',
            'role'      => 'role',
            'tglLahir'  => 'tglLahir'. ('y-m-d') ,
            'is_active' => 1,
            'is_member' => 0,
            'is_admin'  => 1,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    // public function unverified(): static
    // {
    //     return $this->state(fn (array $attributes) => [
    //         'email_verified_at' => null,
    //     ]);
    // }
}
