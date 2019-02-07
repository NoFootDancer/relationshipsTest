<?php

use Illuminate\Database\Seeder;
use App\University;
use App\ProgramName;
class ProgramNamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        ProgramName::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $universidad = University::where('university_name','UABC Universidad Autonoma de Baja California')->first();
        $universidad->programNames()->saveMany([
        	new ProgramName(['program_name'=>'Practicas de ingles']),
        	new ProgramName(['program_name'=>'Practicas de espanol']),
        	new ProgramName(['program_name'=>'Programa academico 1']),
        ]);

        $universidad = University::where('university_name','TEC Tecnologico de tijuana')->first();
        $universidad->programNames()->saveMany([
        	new ProgramName(['program_name'=>'Ingles intensivo']),
        ]);

        $universidad = University::where('university_name','Tec de Monterrey')->first();
        $universidad->programNames()->saveMany([
        	new ProgramName(['program_name'=>'Practicas de ingles']),
        	new ProgramName(['program_name'=>'Clases de spanish']),
        ]);

        $universidad = University::where('university_name','LA University')->first();
        $universidad->programNames()->saveMany([
        	new ProgramName(['program_name'=>'Good English Classes']),
        ]);        
    }
}
