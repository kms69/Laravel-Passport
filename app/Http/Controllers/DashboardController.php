<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Models\PublisherReportage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $visitor = DB::table('publishers')
            ->selectRaw("date(contract_date) as date,avg(publisher_reportages.price) as price,count(name) as count ")
            ->Join("publisher_reportages", "publishers.id", "=", "publisher_reportages.publisher_id")
            ->groupBy('contract_date')
            ->orderBy('contract_date')
            ->get();


        $result[] = ['Date', 'Average Price', 'Count'];
        foreach ($visitor as $key => $value) {
            $result[++$key] = [$value->date, (int)$value->price, (int)$value->count];
        }

        return view('dashboard')
            ->with('visitor', json_encode($result));
    }
}
