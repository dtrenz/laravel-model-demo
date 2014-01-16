<?php

class TagSeeder extends Seeder {

    public function run()
    {
        DB::table('tags')->delete();

        Tag::create(array(
            'id' => 1,
            'name' => 'PHP'
        ));

        Tag::create(array(
            'id' => 2,
            'name' => 'Javascript'
        ));

        Tag::create(array(
            'id' => 3,
            'name' => 'CSS'
        ));

        Tag::create(array(
            'id' => 4,
            'name' => 'MySQL'
        ));

        Tag::create(array(
            'id' => 5,
            'name' => 'HTML'
        ));

        Tag::create(array(
            'id' => 6,
            'name' => 'MongoDB'
        ));

        DB::table('post_tag')->delete();

        DB::table('post_tag')->insert(array(
            array('post_id' => 1, 'tag_id' => 5),
            array('post_id' => 1, 'tag_id' => 3),
            array('post_id' => 2, 'tag_id' => 1),
            array('post_id' => 3, 'tag_id' => 1),
            array('post_id' => 3, 'tag_id' => 4),
            array('post_id' => 4, 'tag_id' => 6),
            array('post_id' => 5, 'tag_id' => 2),
        ));
    }

}