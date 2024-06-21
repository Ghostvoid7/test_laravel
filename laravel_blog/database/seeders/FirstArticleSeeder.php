<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FirstArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'title' => 'Test1001',
            'content' => 'Welcome to the project!',
            'user_id' => 1,
            'created_at' => now(),
        ]);
    }
}
