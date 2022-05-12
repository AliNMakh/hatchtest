<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
         'title' => 'article 1 title ',
        'content' => 'article 1 contet article 1 contet article 1 contet article 1 contet article 1 contet ',
        'slug'=> 'first',
        'category' => 'javascript ']);

        Article::create([  
         'title' => 'article 2 title ',
        'content' => 'article 2 contet article 2 contet article 2 contet article 2 contet article 2 contet ',
        'slug'=> 'seconde',
        'category' => 'javascript ']);

        Article::create([
         'title' => 'article 3 title ',
        'content' => 'article 3 contet article 3 contet article 3 contet article 3 contet article 3 contet ',
        'slug'=> 'third',
        'category' => 'javascript ']);
   
        
    }
}
