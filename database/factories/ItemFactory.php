<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invnumber' => $this->faker->unique()->numberBetween(100000, 999999),
            'title' => $this->faker->word(),
            'comment' => $this->faker->words(7, true),
            'school_id' => "101"
        ];
    }
}
