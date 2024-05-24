<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *@return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=>fake()->name(),
            'price'=>fake()->randomFloat('2',0,2),
            'category'=>fake()->randomElements('makanan','barang',2,false),
        ];
    }
}
