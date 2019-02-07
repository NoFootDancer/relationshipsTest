<?php

use Illuminate\Database\Seeder;
use App\Country;
use App\City;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        City::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

    	$pais = Country::where('country_name','Mexico')->first();
    	$pais->cities()->saveMany([
    		new City(['city_name'=>'Tijuana']),
    		new City(['city_name'=>'Nuevo Leon']),
    	]);

    	$pais = Country::where('country_name','United States')->first();
    	$pais->cities()->saveMany([
    		new City(['city_name'=>'Los Angeles LA']),
    		new City(['city_name'=>'New York']),
    	]);
    }
}
