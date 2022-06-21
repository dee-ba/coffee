<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->text(9),
            'usages_left' => $this->faker->numberBetween(0, 100),
            'bound_to_user' => $this->faker->boolean,
            'multi_use' => $this->faker->boolean,
            'details' => [
                'discount' => $this->faker->randomFloat(2, 0, 100),
            ],
            'expired_at' => $this->faker->optional()->dateTime('+2 months'),
        ];
    }
}
