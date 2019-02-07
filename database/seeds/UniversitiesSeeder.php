<?php

use Illuminate\Database\Seeder;
use App\City;
use App\University;

class UniversitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        University::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $ciudad = City::where('city_name','Tijuana')->first();
        $ciudad->universities()->saveMany([
        	new University(['university_name'=>'UABC Universidad Autonoma de Baja California']),
        	new University(['university_name'=>'TEC Tecnologico de tijuana']),
        ]);

        $ciudad = City::where('city_name','Nuevo Leon')->first();
        $ciudad->universities()->saveMany([
        	new University(['university_name'=>'Tec de Monterrey']),
        ]);

        $ciudad = City::where('city_name','Los Angeles LA')->first();
        $ciudad->universities()->saveMany([
            new University(['university_name'=>'LA University']),
            new University(['university_name'=>'UCLA University']),
        ]);

        $ciudad = City::where('city_name','New York')->first();
        $ciudad->universities()->saveMany([
            new University(['university_name'=>'Trump University']),
            new University(['university_name'=>'Duckies University']),
        ]);
    }
}
