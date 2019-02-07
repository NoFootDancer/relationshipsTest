<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    //
    protected $table = 'academic_years';
    protected $fillable = ['programname_id','year_id'];

    public function year(){
    	return $this->hasOne('App\Year','id','year_id');
    }
}
