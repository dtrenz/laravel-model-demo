<?php

class ImageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('images')->delete();

        // Image::create(array(
        //     'id' => 1,
        //     'text' => 'Great post!'
        // ));

        // Image::create(array(
        //     'id' => 2,
        //     'text' => 'I completely disagree!'
        // ));

        // Image::create(array(
        //     'id' => 3,
        //     'text' => 'I completely agree!'
        // ));
    }

}