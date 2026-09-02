<?php

namespace Database\Factories;

use App\Models\Profiles;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Profiles>
 */
class ProfilesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
        ];
    }
}
