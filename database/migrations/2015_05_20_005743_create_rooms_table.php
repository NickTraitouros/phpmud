<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('map_id')->unsigned();
			$table->integer('x');
			$table->integer('y');
			$table->text('description');
			$table->timestamps();
		});

		Schema::table('rooms', function($table) {
	        $table->foreign('map_id')->references('id')->on('maps');
		});
	}




	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rooms');
	}

}
