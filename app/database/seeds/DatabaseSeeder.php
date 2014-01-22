<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PostSeeder');
		$this->call('TextSeeder');
		$this->call('TagSeeder');
		$this->call('UserSeeder');
		$this->call('ImageSeeder');
		$this->call('CategorySeeder');
		$this->call('CommentSeeder');
	}

}