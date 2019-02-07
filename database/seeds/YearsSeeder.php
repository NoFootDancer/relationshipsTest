<?php

use Illuminate\Database\Seeder;
use App\Year;
class YearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::statement('SET FOREIGN_KEY_CHECKS=0');
	    Year::truncate();
	    DB::statement('SET FOREIGN_KEY_CHECKS=1');

	    $anio = new Year();
	    $anio->year_name = "2018-2019";
	    $anio->save();

	    $anio = new Year();
	    $anio->year_name = "2019-2020";
	    $anio->save();
    }
}
