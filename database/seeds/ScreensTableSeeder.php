<?php

use Illuminate\Database\Seeder;

class ScreensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('screens')->insert([
        		
        		[
        			'theatre_id' => 1,
        			'title' => 'screen 1',
        			'seatsCapacity' => 75
        		],
        		[
        			'theatre_id' => 1,
        			'title' => 'screen 2',
        			'seatsCapacity' => 50
        		],
        		[
        			'theatre_id' => 1,
        			'title' => 'screen 3',
        			'seatsCapacity' => 100
        		],

        		[
        			'theatre_id' => 2,
        			'title' => 'screen 1',
        			'seatsCapacity' => 75
        		],

        		[
        			'theatre_id' => 3,
        			'title' => 'screen 1',
        			'seatsCapacity' => 75
        		],
        		[
        			'theatre_id' => 3,
        			'title' => 'screen 2',
        			'seatsCapacity' => 50
        		],
        		[
        			'theatre_id' => 3,
        			'title' => 'screen 3',
        			'seatsCapacity' => 100
        		],

        		[
        			'theatre_id' => 4,
        			'title' => 'screen 1',
        			'seatsCapacity' => 50
        		],
        		[
        			'theatre_id' => 4,
        			'title' => 'screen 2',
        			'seatsCapacity' => 75
        		],


        		[
        			'theatre_id' => 5,
        			'title' => 'screen 1',
        			'seatsCapacity' => 100
        		],

        		[
        			'theatre_id' => 6,
        			'title' => 'screen 1',
        			'seatsCapacity' => 50
        		],
        		[
        			'theatre_id' => 6,
        			'title' => 'screen 2',
        			'seatsCapacity' => 100
        		],
        		[
        			'theatre_id' => 6,
        			'title' => 'screen 3',
        			'seatsCapacity' => 75
        		],
        		[
        			'theatre_id' => 6,
        			'title' => 'screen 4',
        			'seatsCapacity' => 75
        		],

        		[
        			'theatre_id' => 7,
        			'title' => 'screen 1',
        			'seatsCapacity' => 100
        		],
        		[
        			'theatre_id' => 7,
        			'title' => 'screen 2',
        			'seatsCapacity' => 50
        		],

        		[
        			'theatre_id' => 8,
        			'title' => 'screen 1',
        			'seatsCapacity' => 50
        		],

        		[
        			'theatre_id' => 9,
        			'title' => 'screen 1',
        			'seatsCapacity' => 100
        		],
        		[
        			'theatre_id' => 9,
        			'title' => 'screen 2',
        			'seatsCapacity' => 100
        		],

        		[
        			'theatre_id' => 10,
        			'title' => 'screen 1',
        			'seatsCapacity' => 75
        		],
        		[
        			'theatre_id' => 10,
        			'title' => 'screen 2',
        			'seatsCapacity' => 100
        		],
        		[
        			'theatre_id' => 10,
        			'title' => 'screen 3',
        			'seatsCapacity' => 50
        		]
        	]
        );
    }
}
