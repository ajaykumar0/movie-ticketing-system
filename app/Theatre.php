<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function screens() {
    	return $this->hasMany('App\Screen');
    }
}
