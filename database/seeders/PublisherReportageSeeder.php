<?php

namespace Database\Seeders;

use App\Models\PublisherReportage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Enum;

class PublisherReportageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $list = ['vip', 'news','advertisement'];
        for ($i = 0; $i < 100; $i++) {





            $reportageData[] = [


                'type' =>$list[rand(0,2)],
                'price' =>   rand('1000','25000'),
                'publisher_id' => rand('1', '99'),


            ];
        }
        foreach ($reportageData as $publisher) {
          PublisherReportage::create($publisher);
        }
    }

}
