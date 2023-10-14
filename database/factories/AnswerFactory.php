<?php

namespace Database\Factories;

use App\Models\Contribution;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contribution_id' => Contribution::factory(),
            'question_id' => Question::factory(),
            'body' => fake()->sentence(10)
        ];
    }
}
