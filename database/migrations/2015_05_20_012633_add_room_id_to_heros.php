<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoomIdToHeros extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('heros', function($table){
			$table->integer('room_id')->unsigned();
			$table->foreign('room_id')->references('id')->on('rooms');
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('heros', function($table){
			$table->dropForeign('heros_room_id_foreign');
			$table->dropColumn('room_id');
		});
	}

}
