<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\City;
use App\Year;
use App\ProgramName;
use App\Country;
use App\University;


Route::get('/', function () {
    return view('welcome');
});

Route::get('test',function(){
	//$a = ProgramName::with('university')->get();
	$a = Country::with('cities.universities.programNames.academicYears.year:id,year_name')->get();
	//dd($a);
	return $a;
});