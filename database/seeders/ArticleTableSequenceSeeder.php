<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleTableSequenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Article::factory()->count(3)->sequence(['title' => 'Test Article', 'body' => 'Test Article', 'content_type' => 'Article', 'published' => 'Yes'], ['title' => 'Test Article Two', 'body' => 'Test Article Two', 'content_type' => 'Article', 'published' => 'Yes'], ['title' => 'Test Article Three', 'body' => 'Test Article Three', 'content_type' => 'Article', 'published' => 'Yes'])->make();
    }
}
