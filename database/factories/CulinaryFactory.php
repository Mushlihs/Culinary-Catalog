<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CulinaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->name(),
            "photo_url" => fake()->imageUrl(640, 480, 'Foods', true),
            "description" => fake()->sentence(),
            'author_id' => fake()->numberBetween(1,10)
            //
        ];
    }
}
