<?php

use Illuminate\Database\Seeder;

class TheatresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('theatres')->insert([
        		[
        			'name' => 'Delite Cinema',
        			'address' => 'Asaf Ali Road'
        		],
                [
        			'name' => 'PVR ECX Mall Of India',
        			'address' => 'Noida'
        		],
                [
        			'name' => 'PVR',
        			'address' => 'Logix, Noida'
        		],
        		[
        			'name' => '7D Mastiii',
        			'address' => 'Greater Noida'
        		],

        		[
        			'name' => '7D Mastiii',
        			'address' => 'TDI Mall, Rajouri Garden, Delhi'
        		],
                [
        			'name' => 'Abhishek Cineplex',
        			'address' => 'Chandni Chowk'
        		],
                [
        			'name' => 'Amba Cinema',
        			'address' => 'Delhi'
        		],
        		[
        			'name' => 'Apsara Cinema',
        			'address' => 'Ghaziabad'
        		],

        		[
        			'name' => 'MSX Silvercity',
        			'address' => 'Haldiram Citymall Sec12, Faridabad'
        		],
        		[
        			'name' => 'Miraj Cinemas',
        			'address' => 'Subhash Nagar'
        		],
        	]
        );
    }
}
