<?php

namespace Database\Seeders;

use Flabib\CsvSeeder\CsvSeeder;

class MeterPointsSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeders/csvs/meterpoints.csv';
        $this->tablename = 'meter_points';
    }
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
	    DB::disableQueryLog();
	    parent::run();
    }
}