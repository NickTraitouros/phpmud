<?php

use Illuminate\Database\Seeder;

class MapsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('maps')->delete();
        
		\DB::table('maps')->insert(array (
			0 => 
			array (
				'id' => 1,
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
