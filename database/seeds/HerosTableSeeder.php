<?php

use Illuminate\Database\Seeder;

class HerosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('heros')->delete();
        
		\DB::table('heros')->insert(array (
			0 => 
			array (
				'id' => 3,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'name' => 'Gilgamesh',
				'room_id' => 5,
			),
		));
	}

}
