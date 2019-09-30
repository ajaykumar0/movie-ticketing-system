<?php

use Illuminate\Database\Seeder;

class ShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shows')->insert([
        		[
        			'movie_id' => 1,
        			'screen_id' => 1,
        			'dimension' => '2D',
        			'language' => 'HINDI',
        			'price' => 175.00,
        			'remainingSeats' => 75,
        			'showStartingTime' => '2019-09-29 09:00:00',
        			'showEndingTime' => '2019-09-29 11:15:00'
        		],
        		[
        			'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
        		],
        		[
        			'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
        		],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],

                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],

                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],

                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],

                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],


                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],


                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],

                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],

                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],

                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 09:00:00',
                    'showEndingTime' => '2019-09-29 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 11:30:00',
                    'showEndingTime' => '2019-09-29 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 14:00:00',
                    'showEndingTime' => '2019-09-29 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 16:30:00',
                    'showEndingTime' => '2019-09-29 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-09-29 19:00:00',
                    'showEndingTime' => '2019-09-29 21:15:00'
                ],


                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],

                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],

                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],

                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],

                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],


                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],


                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],

                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],

                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],

                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 09:00:00',
                    'showEndingTime' => '2019-10-02 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 11:30:00',
                    'showEndingTime' => '2019-10-02 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 14:00:00',
                    'showEndingTime' => '2019-10-02 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 16:30:00',
                    'showEndingTime' => '2019-10-02 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-02 19:00:00',
                    'showEndingTime' => '2019-10-02 21:15:00'
                ],


                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],

                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],

                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],

                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],

                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],


                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],


                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],

                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],

                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],

                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 09:00:00',
                    'showEndingTime' => '2019-10-03 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 11:30:00',
                    'showEndingTime' => '2019-10-03 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 14:00:00',
                    'showEndingTime' => '2019-10-03 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 16:30:00',
                    'showEndingTime' => '2019-10-03 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-03 19:00:00',
                    'showEndingTime' => '2019-10-03 21:15:00'
                ],


                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],

                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],

                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],

                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],

                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],


                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],


                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],

                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],

                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],

                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 09:00:00',
                    'showEndingTime' => '2019-10-04 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 11:30:00',
                    'showEndingTime' => '2019-10-04 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 14:00:00',
                    'showEndingTime' => '2019-10-04 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 16:30:00',
                    'showEndingTime' => '2019-10-04 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-04 19:00:00',
                    'showEndingTime' => '2019-10-04 21:15:00'
                ],


                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],

                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],

                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],

                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],

                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],


                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],


                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],

                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],

                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],

                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 09:00:00',
                    'showEndingTime' => '2019-10-05 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 11:30:00',
                    'showEndingTime' => '2019-10-05 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 14:00:00',
                    'showEndingTime' => '2019-10-05 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 16:30:00',
                    'showEndingTime' => '2019-10-05 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-05 19:00:00',
                    'showEndingTime' => '2019-10-05 21:15:00'
                ],


                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],

                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],

                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],

                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],

                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],


                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],


                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],

                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],

                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],

                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 09:00:00',
                    'showEndingTime' => '2019-10-06 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 11:30:00',
                    'showEndingTime' => '2019-10-06 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 14:00:00',
                    'showEndingTime' => '2019-10-06 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 16:30:00',
                    'showEndingTime' => '2019-10-06 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-06 19:00:00',
                    'showEndingTime' => '2019-10-06 21:15:00'
                ],


                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 1,
                    'screen_id' => 1,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 175.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],

                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 2,
                    'screen_id' => 2,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 185.00,
                    'remainingSeats' => 75,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 3,
                    'dimension' => '3D',
                    'language' => 'HINDI',
                    'price' => 190.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],

                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 4,
                    'screen_id' => 4,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 5,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],

                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 6,
                    'screen_id' => 6,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],

                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 7,
                    'screen_id' => 7,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 8,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],


                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 9,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],


                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 10,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],

                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 10,
                    'screen_id' => 22,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],

                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 9,
                    'screen_id' => 21,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],

                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 8,
                    'screen_id' => 20,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],

                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 5,
                    'screen_id' => 19,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ],

                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 09:00:00',
                    'showEndingTime' => '2019-10-07 11:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 11:30:00',
                    'showEndingTime' => '2019-10-07 13:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 14:00:00',
                    'showEndingTime' => '2019-10-07 16:15:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 16:30:00',
                    'showEndingTime' => '2019-10-07 18:45:00'
                ],
                [
                    'movie_id' => 3,
                    'screen_id' => 15,
                    'dimension' => '2D',
                    'language' => 'HINDI',
                    'price' => 195.00,
                    'remainingSeats' => 50,
                    'showStartingTime' => '2019-10-07 19:00:00',
                    'showEndingTime' => '2019-10-07 21:15:00'
                ]
        	]
        );
    }
}
