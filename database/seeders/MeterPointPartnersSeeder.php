<?php

namespace Database\Seeders;

use Flabib\CsvSeeder\CsvSeeder;

class MeterPointPartnersSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeders/csvs/meterpoint_partners.csv';
        $this->tablename = 'meter_point_partners';
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