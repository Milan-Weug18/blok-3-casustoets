<?php

use Illuminate\Database\Seeder;
use App\Ranking;

class RankingsTableSeeder extends Seeder
{
    use CsvReadable;

    public function __construct()
    {
        $this->path = "seed_files/rankings.csv";
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

            Ranking::create($data);
        });
    }
}
