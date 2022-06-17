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
        $faker = Faker::create();
        DB::table('users')->insert([
        'first_name' => $faker ->firstName(),
        'last_name' => $faker ->lastName(),
        'street_name' => $faker ->streetName(),
        'postal_code' => Str::random(4),
        'city' => $faker ->city(),
        'phone' => $faker -> phoneNumber,
        'date_of_birth' => $faker -> dateTimeBetween('-100 years' , 'now'),
        'email' => $faker -> email(),
        'email_verified_at' => $faker -> date(),
        'password' => $faker -> password(),
        'created_at' => date('y-m-d'),	
		'updated_at' => date('y-m-d')	   
        ]);
    }
}