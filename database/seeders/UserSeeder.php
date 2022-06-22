<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


use Faker\Factory as Faker;
use Faker\Provider\en_US\Person;
use Faker\Provider\en_US\Address;
use Faker\Provider\en_US\PhoneNumber;
use Faker\Provider\Internet;
use Faker\Provider\DateTime;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
        'first_name' => 'Dee',
        'last_name' => 'Ali',
        'street_name' => 'Dee Street',
        'postal_code' => Str::random(4),
        'city' => 'Dee City',
        'phone' => '123456',
        'date_of_birth' => date('Y-m-d'),
        'email' => 'dee@hotmail.com',
        'email_verified_at' => date('Y-m-d'),
        'password' => bcrypt('123'),
        'user_type' => 'Administrator',
        'created_at' => date('Y-m-d'),	
		'updated_at' => date('Y-m-d')	   
        ]);
    }
}