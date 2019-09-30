<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('movie_id')->unsigned();
            $table->bigInteger('screen_id')->unsigned();
            $table->enum('dimension', [
                '2D',
                '3D',
                'IMAX'
            ])->default('2D');
            $table->string('language');
            $table->float('price', 8, 2);
            $table->integer('remainingSeats')->unsigned();
            $table->dateTime('showStartingTime');
            $table->dateTime('showEndingTime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shows');
    }
}
