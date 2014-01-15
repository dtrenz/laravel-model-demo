<?php

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('categories')->delete();

        Category::create(array(
            'id' => 1,
            'name' => 'php'
        ));

        Category::create(array(
            'id' => 2,
            'name' => 'javascript'
        ));

        Category::create(array(
            'id' => 3,
            'name' => 'css'
        ));
    }

}