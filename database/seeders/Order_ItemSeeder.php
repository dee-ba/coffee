<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


use Faker\Factory as Faker;

class Order_ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('order_items')->insert([
        'id' => $faker->numberBetween(1,50),
        'order_id' => $faker->numberBetween(1,50),
        'product_id' => $faker->numberBetween(1,50),
        'amount' => $faker->numberBetween(1,50),
        'total_price' => 10.99,
        'sweetener' => 'sugar',
        'topping' => 'cream',
        'flavour' => 'vanilla',
        'milk' => $faker -> boolean(),
        'size' => 'medium',
        'created_at' => date('y-m-d'),	
		'updated_at' => date('y-m-d')
    
    
        ]);
    }
}
