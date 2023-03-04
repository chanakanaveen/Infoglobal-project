<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        // religion-chart start

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

        // dd($religionChart);
        return view('dashboard',compact('religionChart'));
    }
}
