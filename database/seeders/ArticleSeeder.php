<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::query()->create([
           'title' => 'Работа с larka 9',
           'anons_title' => 'laravel 9',
           'content' => 'Ранис черт блблблблблблблблблблблблбблблблблблблблблблблблбблблблблблблбблблблблблб',
           'status' => 'published',
           'author_id' => rand(1, 2),
           'category_id' => rand(1, 5)
        ]);

        Article::query()->create([
            'title' => 'Работа с larka 10',
            'anons_title' => 'laravel 10',
            'content' => 'Ранис черт 2 ,k,k,k,,k,k,k,k,,k,k,k,k,,k,k,k,k,k,',
            'status' => 'blocked',
            'author_id' => rand(1, 2),
            'category_id' => rand(1, 5)
        ]);
    }
}
