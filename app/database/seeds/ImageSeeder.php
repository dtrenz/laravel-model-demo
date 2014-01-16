<?php

class ImageSeeder extends Seeder {

    public function run()
    {
        DB::table('images')->delete();

        Image::create(array(
            'url' => 'https://pbs.twimg.com/profile_images/378800000607588261/dad9f009a228a78a14f1f4bed0c54f76.png',
            'imageable_id' => 1,
            'imageable_type' => 'User',
        ));

        Image::create(array(
            'url' => 'https://pbs.twimg.com/profile_images/3047681237/0dae20f6642d52ca86482c7d0d63358c.png',
            'imageable_id' => 2,
            'imageable_type' => 'User',
        ));

        Image::create(array(
            'url' => '/images/code.png',
            'imageable_id' => 1,
            'imageable_type' => 'Post',
        ));

        Image::create(array(
            'url' => '/images/code.png',
            'imageable_id' => 2,
            'imageable_type' => 'Post',
        ));

        Image::create(array(
            'url' => '/images/code.png',
            'imageable_id' => 3,
            'imageable_type' => 'Post',
        ));

        Image::create(array(
            'url' => '/images/code.png',
            'imageable_id' => 4,
            'imageable_type' => 'Post',
        ));

        Image::create(array(
            'url' => '/images/code.png',
            'imageable_id' => 5,
            'imageable_type' => 'Post',
        ));
    }
}