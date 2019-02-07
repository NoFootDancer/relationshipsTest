<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramName extends Model
{
    protected $table = 'program_names';
    protected $fillable = ['program_name','id','university_id'];

    public function university(){
    	return $this->belongsTo('App\University');
    }

    public function academicYears(){
    	return $this->hasMany('App\AcademicYear','programname_id','id');	
    }
}
