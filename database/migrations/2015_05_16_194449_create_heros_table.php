<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHerosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('heros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 20);
			$table->integer('hitPoints');
			$table->integer('maxHitPoints');
			$table->integer('strength');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('heros');
	}

}
