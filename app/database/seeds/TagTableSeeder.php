<?php

class TagTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tag')->delete();

        Tag::create(array(
            'id' => 1,
            'text' => 'php'
        ));

        Tag::create(array(
            'id' => 2,
            'text' => 'javascript'
        ));

        Tag::create(array(
            'id' => 3,
            'text' => 'css'
        ));

        Tag::create(array(
            'id' => 4,
            'text' => 'mysql'
        ));

        Tag::create(array(
            'id' => 5,
            'text' => 'html'
        ));
    }

}