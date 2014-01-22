<?php

class CommentSeeder extends Seeder {

    public function run()
    {
        DB::table('comments')->delete();

        Comment::create(array(
            'text' => 'Great Post, Thanks!',
            'post_id' => 1,
            'user_id' => 1
        ));

        Comment::create(array(
            'text' => 'Great Post, Thanks!',
            'post_id' => 1,
            'user_id' => 2
        ));

        Comment::create(array(
            'text' => 'Great Post, Thanks!',
            'post_id' => 2,
            'user_id' => 1
        ));

        Comment::create(array(
            'text' => 'Great Post, Thanks!',
            'post_id' => 2,
            'user_id' => 1
        ));

        Comment::create(array(
            'text' => 'Great Post, Thanks!',
            'post_id' => 3,
            'user_id' => 1
        ));

        Comment::create(array(
            'text' => 'Great Post, Thanks!',
            'post_id' => 3,
            'user_id' => 2
        ));
    }

}