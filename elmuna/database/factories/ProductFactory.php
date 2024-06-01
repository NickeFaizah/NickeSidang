<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
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
            'sku'                   => Str::random(10),
            'nama_product'          => 'nama',
            'type'                  => 'type',
            'kategory'              => 'kategori',
            'harga'                 => 'harga',
            'quantity'              => 'quantity',
            'discount'              => 10 / 100,
            'is_active'             => 1,

        ];
    }
}
