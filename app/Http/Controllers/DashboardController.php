<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        // religion-chart start --------------------------

        // $result = DB::select('SELECT religion, COUNT(*) as count FROM people GROUP BY religion');
        $result= DB::table('people')
                ->select('religion', DB::raw('count(*) as Count'))
                ->groupBy('religion')
                ->get();

        $data ="";
        foreach($result as $val){
            $data.="['".$val->religion."',".$val->Count."],";
        }
        $religionChart=$data;

        // month chart-------------------------------------

        // SELECT count(dob), MONTHNAME(dob) AS month FROM person GROUP BY (MONTH(dob));
        $monthresult = DB::table('people')
        ->select(DB::raw('MONTHNAME(dob) as month'), DB::raw('COUNT(*) as Count'))
        ->groupBy(DB::raw('month'))
        ->orderBy(DB::raw('MONTH(dob)'))->get();

        $data ="";
        foreach($monthresult as $val){
            $data.="['".$val->month."',".$val->Count."],";
        }
        $monthChart=$data;

        // age chart ---------------------------------------

             // $agesCounts = DB::table('person')
        //         ->selectRaw('COUNT(CASE WHEN age < 18 THEN 1 ELSE NULL END) AS `Under 18`')
        //         ->selectRaw('COUNT(CASE WHEN age BETWEEN 18 AND 24 THEN 1 ELSE NULL END) AS `18-24`')
        //         ->selectRaw('COUNT(CASE WHEN age BETWEEN 25 AND 34 THEN 1 ELSE NULL END) AS `25-34`')->first();

        //         // $data ="";
        //         // foreach($agesCounts as $val){
        //         //     $data.="['".$val->month."',".$val->Count."],";
        //         // }
        //         // $ageChartData=$data;

        $agesCounts = DB::table('people')
                ->selectRaw('COUNT(CASE WHEN age < 18 THEN 1 ELSE NULL END) AS `Under 18`')
                ->selectRaw('COUNT(CASE WHEN age BETWEEN 18 AND 24 THEN 1 ELSE NULL END) AS `18-24`')
                ->selectRaw('COUNT(CASE WHEN age BETWEEN 25 AND 34 THEN 1 ELSE NULL END) AS `25-34`')
                ->selectRaw('COUNT(CASE WHEN age BETWEEN 35 AND 44 THEN 1 ELSE NULL END) AS `35-44`')
                ->selectRaw('COUNT(CASE WHEN age BETWEEN 45 AND 54 THEN 1 ELSE NULL END) AS `45-54`')
                ->selectRaw('COUNT(CASE WHEN age BETWEEN 55 AND 64 THEN 1 ELSE NULL END) AS `55-64`')
                ->selectRaw('COUNT(CASE WHEN age BETWEEN 65 AND 74 THEN 1 ELSE NULL END) AS `65-74`')
                ->selectRaw('COUNT(CASE WHEN age > 75 THEN 1 END) AS `Over 75`')
                ->first();

                $data ="";
                foreach($agesCounts as $key => $val){
                    $data.="['".$key."',".$val."],";
                }
                $ageChart=$data;


        // dd($ageChart);
        return view('dashboard',compact('religionChart','monthChart','ageChart'));
    }
}
