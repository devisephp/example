<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('beers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('brewer_id')->unsigned();
			$table->integer('beer_style_id')->unsigned();
			$table->string('name');
			$table->string('abv');
			$table->string('advocate_rating');
			$table->string('rating');
			$table->text('about');
			$table->text('image_url');
			$table->text('thumbnail_url');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('beers');
	}

}
