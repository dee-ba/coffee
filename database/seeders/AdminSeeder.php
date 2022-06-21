<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


use Faker\Factory as Faker;



class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('admins')->insert([
        'first_name' => $faker ->firstName(),
        'last_name' => $faker ->lastName(),
        'email' => $faker -> email(),
        'email_verified_at' => $faker -> date(),
        'password' => $faker -> password(),
        'created_at' => date('y-m-d'),	
		'updated_at' => date('y-m-d')	   
        ]);
    }
}
