<?php

class CommentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('comments')->delete();

        Comment::create(array(
            'id' => 1,
            'text' => 'Great post!'
        ));

        Comment::create(array(
            'id' => 2,
            'text' => 'I completely disagree!'
        ));

        Comment::create(array(
            'id' => 3,
            'text' => 'I completely agree!'
        ));
    }

}