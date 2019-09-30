<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(TheatresTableSeeder::class);
        $this->call(ScreensTableSeeder::class);
        $this->call(ShowsTableSeeder::class);
    }
}
