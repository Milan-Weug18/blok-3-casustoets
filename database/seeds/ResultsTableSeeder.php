<?php

use Illuminate\Database\Seeder;
use App\Result;

class ResultsTableSeeder extends Seeder
{
    use CsvReadable;

    public function __construct()
    {
        $this->path = "seed_files/results.csv";
        $this->delimiter = ";";
        $this->header_row = 0;
        $this->start_row = 1;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->readCsvData( function($data)
        {
            $this->command->info("Importing: " . json_encode($data));

            // Parse the date (eg. 05-02-2019) to an importable object
            $data['date'] = \Carbon\Carbon::createFromFormat('d-m-Y', $data['date']);

            // Parse the time (eg. 19.15) to an importable object
            $data['time'] = \Carbon\Carbon::createFromFormat('G:i', $data['time']);

            Result::create($data);
        });
    }
}
