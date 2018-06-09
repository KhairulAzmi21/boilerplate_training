<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 300)->create();
        $category_id = range(1, 12);
        $posts = Post::get();

        // $posts->each(function ($post, $key) use ($category_id) {
        //     $post->categories()->sync(array_random($category_id, 3));
        // });
    }
}
