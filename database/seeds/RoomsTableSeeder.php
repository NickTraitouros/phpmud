<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('rooms')->delete();

		\DB::table('rooms')->insert(array (
			0 =>
			array (
				'id' => 1,
				'map_id' => 1,
				'x' => 0,
				'y' => 0,
				'description' => 'just a room',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			1 =>
			array (
				'id' => 4,
				'map_id' => 1,
				'x' => 0,
				'y' => 1,
				'description' => 'just another room',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			2 =>
			array (
				'id' => 5,
				'map_id' => 1,
				'x' => 1,
				'y' => 0,
				'description' => 'start room',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			3 =>
			array (
				'id' => 6,
				'map_id' => 1,
				'x' => 1,
				'y' => 1,
				'description' => 'just a room',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			4 =>
			array (
				'id' => 7,
				'map_id' => 1,
				'x' => 1,
				'y' => 2,
				'description' => 'just a room',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			5 =>
			array (
				'id' => 8,
				'map_id' => 1,
				'x' => 2,
				'y' => 1,
				'description' => 'just a room',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			6 =>
			array (
				'id' => 10,
				'map_id' => 1,
				'x' => 0,
				'y' => 2,
				'description' => 'just a room',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			7 =>
			array (
				'id' => 12,
				'map_id' => 1,
				'x' => 2,
				'y' => 0,
				'description' => 'just a room',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			8 =>
			array (
				'id' => 13,
				'map_id' => 1,
				'x' => 2,
				'y' => 2,
				'description' => 'just a room',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			9 =>
			array (
				'id' => 14,
				'map_id' => 1,
				'x' => 2,
				'y' => 3,
				'description' => 'just a room',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
