<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $path = '/Users/seiz/Documents/gist.githubusercontent.com_tanerdogan_10103011_raw_1b7cf2b5dfcb9be242e7cc8fbc1b95950b16becb_airports.sql.txt';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Country table seeded!');
    }
}
