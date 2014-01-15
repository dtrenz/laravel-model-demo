<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'id' => 1,
            'name' => 'Barack Obama'
        ));

        User::create(array(
            'id' => 2,
            'name' => 'Grumpy Cat'
        ));
    }

}