<?php

namespace Database\Factories;

use App\Models\Airport;
use App\Models\Post;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contribution>
 */
class ContributionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomPost = rand(1, 10);

        return [
            'user_id' => Post::find($randomPost)->user_id,
            'post_id' => Post::find($randomPost)->id,
            'airport_id' => Post::find($randomPost)->airport_id,
            'topic_id' => Topic::factory(),
            'variant' => 'regular'
        ];
    }
}
