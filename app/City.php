<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $table = 'cities';
    protected $fillable = ['city_name','id','country_id'];

    public function universities(){
    	return $this->hasMany('App\University');
    }

    public function country(){
    	return $this->belongsTo('App\Country');
    }
}
