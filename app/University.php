<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = 'universities';
    protected $fillable = ['university_name','city_id','id'];

    public function programNames(){
    	return $this->hasMany('App\ProgramName');
    }

    public function city(){
    	return $this->belongsTo('App\City');
    }
}
