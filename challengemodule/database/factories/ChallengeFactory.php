<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChallengeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->sentence,
            'checked' => $this->faker->boolean,
            'reward_coins' => $this->faker->numberBetween(100, 1000),
            'max_users' => $this->faker->numberBetween(1, 10),
            'current_users' => $this->faker->numberBetween(0, 5),
            'expiration_date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'product_name' => $this->faker->word,
            'product_quantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}
