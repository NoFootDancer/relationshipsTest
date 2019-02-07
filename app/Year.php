<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Year;
class Year extends Model
{
	protected $table = 'years';
	protected $fillable = ['id','year_name'];
}
