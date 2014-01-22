<?php

class PostSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        Post::create(array(
            'id' => 1,
            'title' => 'Post About HTML/CSS',
            'author_id' => 1,
            'category_id' => 1
        ));

        Post::create(array(
            'id' => 2,
            'title' => 'Post About PHP',
            'author_id' => 2,
            'category_id' => 2
        ));

        Post::create(array(
            'id' => 3,
            'title' => 'Post About PHP/MySQL',
            'author_id' => 1,
            'category_id' => 3
        ));

        Post::create(array(
            'id' => 4,
            'title' => 'Post About MongoDB',
            'author_id' => 2,
            'category_id' => 1
        ));

        Post::create(array(
            'id' => 5,
            'title' => 'Post About jQuery',
            'author_id' => 1,
            'category_id' => 2
        ));
    }

}