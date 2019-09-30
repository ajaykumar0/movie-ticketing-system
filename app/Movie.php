<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'url', 'genre', 'description', 'durationInMinutes', 'language', 'releaseDate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function shows() {
        return $this->belongsToMany('App\Screen', 'shows')->withPivot([
            'id',
            'dimension',
            'language',
            'price',
            'remainingSeats',
            'showStartingTime',
            'showEndingTime'
        ])->with('theatre');
    }
}
