<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Coupon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call (AdminSeeder::class); 
         
        //Coupon::factory(5)->create();
         User::factory(1)->create();
         $this->call (ProductSeeder::class); 
         //$this->call (Order_ItemSeeder::class); 
         Product::factory(10)->create();
         $this->call (UserSeeder::class);
         //$this->call (OrderSeeder::class);      
    
    }
}
