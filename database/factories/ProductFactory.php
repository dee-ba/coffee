<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\date;


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
            'name' => 'Iced Latte',
            'description' => 'Blended with milk and ice, layered on top of whipped cream.',
            'image' => 'https://images.unsplash.com/photo-1524095731963-b4e38d1b3329?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80',
            'price' => 4.99,
            'category' => "cold",
            'stock' => 1,
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
    
        ];

    }
}



