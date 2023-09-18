<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => fake()->numberBetween(0,10),
            "culinary_id" => fake()->numberBetween(0,10),
            "comment_text" => fake()->sentence(),
            'rating' => fake()->numberBetween(1,5)
        ];
    }
}
