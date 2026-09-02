<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barcode'=> $this->faker->ean13(),
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2, 0, 100),
            'quantity' => $this->faker->randomNumber(2),
            'description' => $this->faker->paragraph(),
        ];
    }
}
