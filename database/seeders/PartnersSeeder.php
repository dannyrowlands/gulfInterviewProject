<?php

namespace Database\Seeders;

use Flabib\CsvSeeder\CsvSeeder;

class PartnersSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeders/csvs/brokers.csv';
        $this->tablename = 'partners';
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
