<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'movie_id', 'screen_id', 'dimension', 'language', 'price', 'remainingSeats', 'showStartingTime', 'showEndingTime'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function screen() {
    	return $this->belongsTo('App\Screen')->with('theatre');
    }

    public function movie() {
    	return $this->belongsTo('App\Movie');
    }

    public function bookings() {
        return $this->belongsToMany('App\User', 'bookings')->withPivot([
            'numberOfSeats',
            'subTotal',
            'discount',
            'total',
            'status',
            'created_at',
            'updated_at'
        ]);
    }
    
}
