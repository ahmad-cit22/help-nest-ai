<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Knowledgebase>
 */
class KnowledgebaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraphs(3, true),
            'embedding' => [
                $this->faker->randomFloat(5, -1, 1),
                $this->faker->randomFloat(5, -1, 1),
                $this->faker->randomFloat(5, -1, 1),
            ],
            'is_published' => $this->faker->boolean(),
            'created_by' => User::factory(),
        ];
    }
}
