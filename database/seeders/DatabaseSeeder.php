<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call (ProductSeeder::class); 
        //Product::factory(10)->create();
       //User::factory(5)->create();
       //$this->call (UserSeeder::class);
    }
}
