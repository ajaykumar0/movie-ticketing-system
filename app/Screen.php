<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'theatre_id', 'title', 'seatsCapacity'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function theatre() {
    	return $this->belongsTo('App\Theatre');
    }

    public function shows() {
        return $this->belongsToMany('App\Movie', 'shows')->withPivot([
            'id',
            'dimension',
            'language',
            'price',
            'remainingSeats',
            'showStartingTime',
            'showEndingTime'
        ]);
    }
    
}
