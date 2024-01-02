<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Answer;
use App\Models\Contribution;
use App\Models\Post;
use App\Models\Question;
use App\Models\User;
use App\Models\Topic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::unprepared(file_get_contents('/Users/seiz/Downloads/sql/airports.sql'));
        $this->command->info('Airport table seeded!');

        // Create the first User
        User::factory(1)->create([
            'first_name' => 'olaf',
            'last_name' => 'olaf',
            'email' => 'olaf@email.com',
            'password' => 'password'
        ]);

        // Create 10 Posts
        Post::factory(10)->create([
            'user_id' => 1
        ]);

        // Create 10 Topics
        Topic::factory(10)->create();

        // Create 10 questions for the 1st Topic
        Question::factory(10)->create([
            'topic_id' => 1
        ]);

        // Create one Contribution for the 1st Airport and 1st Topic BY the 1st User
        Contribution::factory()->create([
            'user_id' => 1,
            'post_id' => 1,
            'topic_id' => 1
        ]);

        Contribution::factory()->create([
            'post_id' => 1,
            'topic_id' => 1
        ]);

        // For the 1st and 2nd contribution,
        for ($y = 1; $y < 3; $y++) {

            // Create answers for all the 10 questions
            for ($x = 1; $x <= 10; $x++) {

                Answer::factory()->create([
                    'question_id' => $x,
                    'contribution_id' => $y
                ]);
            }
        }
    }
}
