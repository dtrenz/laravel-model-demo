<?php

class UserSeeder extends Seeder {

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

        User::create(array(
            'id' => 3,
            'name' => 'Dan Trenz'
        ));
    }

}