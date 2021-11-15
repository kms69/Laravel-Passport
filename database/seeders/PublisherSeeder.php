<?php

namespace Database\Seeders;

use App\Models\Publisher;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PublisherSeeder extends Seeder
{
    private $publisherData = [];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $year = rand(2021,2021);
            $month = rand(10, 11);
            $day = rand(1, 30);

            $date = Carbon::create($year,$month ,$day );
            $publisherDataData[] = [
                'name' => Str::random(10),
                'contract_date' => $date->format('Y-m-d H:i:s') ,

            ];
        }
        foreach ($publisherDataData as $publisher) {
            Publisher::create($publisher);
        }
    }
}
