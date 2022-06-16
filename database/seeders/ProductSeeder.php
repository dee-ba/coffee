<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



use Faker\Factory as Faker;
use Ramsey\Uuid\Type\Decimal;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 

       public function run()
    {
        $faker = Faker::create();
        DB::table('products')->insert([
            'name' => 'Iced Latte',
            'description' => 'Blended with milk and ice, layered on top of whipped cream.',
            'image' => 'https://images.unsplash.com/photo-1524095731963-b4e38d1b3329?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80',
            'price' => 4.99,
            'category' => "cold",
            'stock' => random_int(50,100),
            'created_at' => date('y-m-d h:m:s'),	
		'updated_at' => date('y-m-d h:m:s')	
        ]);

    }
}

