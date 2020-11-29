<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->truncate();
        $blogs = [
        	['title' => 'first_blog', 'content' => 'test1'],
        	['title' => 'seocnd_blog', 'content' => 'test2']

        ];
        foreach($blogs as $blog) {
        	\App\Blog::create($blog);
        }
    }
}
