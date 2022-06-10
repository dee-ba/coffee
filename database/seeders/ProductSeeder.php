<?php

namespace Database\Seeders;

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
        'name' => $faker->lastName() . "coffee", 
        'description' => "So delicious",
        'image' => $faker ->streetName(),
        'price' => random_int(1,2),
        'category' => "cold",
        'stock' => random_int(50,100)
            
        ]);
    }
}
