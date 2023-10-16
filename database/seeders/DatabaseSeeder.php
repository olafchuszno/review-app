<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Answer;
use App\Models\Post;
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

        User::factory(1)->create([
            'first_name' => 'olaf',
            'last_name' => 'olaf',
            'email' => 'olaf@email.com',
        ]);

        Post::factory(10)->create();

        Topic::factory(10)->create();

        Answer::factory(10)->create();

        Answer::factory(10)->create([
            'contribution_id' => 1
        ]);
    }
}
