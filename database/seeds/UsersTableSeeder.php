<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        		[
        			'name' => 'Ajay Kumar',
        			'gender' => 'male',
        			'email' => 'ajayrajput712@gmail.com',
        			'password' => '$2y$10$EluedBTk/H13HrPd2uEtQumWvYJ1qutyYVgunBMVwWvHiFd.1HWoy'
        		],
                [
        			'name' => 'Gaurav',
        			'gender' => 'male',
        			'email' => 'gaurav@farziengineer.com',
        			'password' => '$2y$10$EluedBTk/H13HrPd2uEtQumWvYJ1qutyYVgunBMVwWvHiFd.1HWoy'
        		],
                [
        			'name' => 'Ashutosh',
        			'gender' => 'male',
        			'email' => 'ashutosh@farziengineer.com',
        			'password' => '$2y$10$EluedBTk/H13HrPd2uEtQumWvYJ1qutyYVgunBMVwWvHiFd.1HWoy'
        		],
        		[
        			'name' => 'Priyanka',
        			'gender' => 'female',
        			'email' => 'priyanka@farziengineer.com',
        			'password' => '$2y$10$EluedBTk/H13HrPd2uEtQumWvYJ1qutyYVgunBMVwWvHiFd.1HWoy'
        		],
        	]
        );
    }
}
