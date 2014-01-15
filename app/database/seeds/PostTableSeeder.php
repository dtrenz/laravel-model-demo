<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        Post::create(array(
            'id' => 1,
            'title' => 'Post Title #1'
        ));

        Post::create(array(
            'id' => 2,
            'title' => 'Post Title #2'
        ));

        Post::create(array(
            'id' => 3,
            'title' => 'Post Title #3'
        ));

        Post::create(array(
            'id' => 4,
            'title' => 'Post Title #4'
        ));

        Post::create(array(
            'id' => 5,
            'title' => 'Post Title #5'
        ));
    }

}