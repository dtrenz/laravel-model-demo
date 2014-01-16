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

		$this->call('ImageSeeder');
		$this->call('PostSeeder');
		$this->call('TagSeeder');
		$this->call('TextSeeder');
		$this->call('UserSeeder');
	}

}