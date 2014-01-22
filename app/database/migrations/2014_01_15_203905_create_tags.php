<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTags extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tags', function(Blueprint $table)
		{
			// columns
			$table->increments('id');
			$table->string('name');
		});

		Schema::create('post_tag', function(Blueprint $table)
		{
			// columns
			$table->integer('post_id');
			$table->integer('tag_id');

			// indexes
			$table->index(array('post_id', 'tag_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tags');
		Schema::dropIfExists('post_tag');
	}

}