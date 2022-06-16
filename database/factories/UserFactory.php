<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

        'first_name' => $this->faker ->firstName(),
        'last_name' => $this->faker ->lastName(),
        'street_name' => $this->faker ->streetName(),
        'postal_code' => Str::random(4),
        'city' => $this->faker ->city(),
        'phone' => $this->faker -> phoneNumber,
        'date_of_birth' => $this->faker -> dateTimeBetween('-100 years' , 'now'),
        'email' => $this->faker->unique()->safeEmail(),
        'email_verified_at' => now(),
        'password' => $this->faker -> password(),
        'created_at' => date('y-m-d h:m:s'),	
		'updated_at' => date('y-m-d h:m:s'),


            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
