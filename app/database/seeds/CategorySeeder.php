<?php

class CategorySeeder extends Seeder {

    public function run()
    {
        DB::table('categories')->delete();

        Category::create(array(
            'id' => 1,
            'name' => 'Web Development'
        ));

        Category::create(array(
            'id' => 2,
            'name' => 'Web Design'
        ));

        Category::create(array(
            'id' => 3,
            'name' => 'Testing'
        ));
    }

}