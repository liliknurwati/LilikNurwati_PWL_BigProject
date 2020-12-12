<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            "title"=>"first article",
            "content"=>"article masalah sosial",
            "featured_imaged"=>"453kehidupan"
        ]);
    }
}
