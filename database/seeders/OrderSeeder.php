<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('orders')->insert([
        'user_id' => $faker->numberBetween(1,10),
        // 'order_items_id' =>$faker->numberBetween(1,50),
        'created_at' => date('y-m-d'),	
		'updated_at' => date('y-m-d')
       
        ]);
    }
}
