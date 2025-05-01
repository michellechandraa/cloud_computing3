<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_comments')->insert([
            [
                'user_id' => 1,
                'movie_id' => 1,
                'comment' => 'This is a good movie!',
                'created_at' => now(),
            ],
        ]);
    }
}
