<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'show_id', 'numberOfSeats', 'subTotal', 'discount', 'total', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function show() {
    	return $this->belongsTo('App\Show')->with('screen')->with('movie');
    }
}
