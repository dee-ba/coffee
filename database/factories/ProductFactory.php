<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

        'name' => $this->faker ->lastName() . "coffee", 
        'description' => "So delicious",
        'image' => $this->faker ->streetName(),
        'price' => random_int(1,2),
        'category' => "cold",
        'stock' => random_int(10,100)

        ];
    }
}
