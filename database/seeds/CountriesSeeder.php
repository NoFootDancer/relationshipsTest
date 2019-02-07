<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Country::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $pais = new Country();
        $pais->country_name = "United States";
        $pais->save();

        $pais = new Country();
        $pais->country_name = "Mexico";
        $pais->save();
    }
}
