<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Prestamointerno;
class filter extends Controller
{
    //
    public function index()
    {   
        return view('filter');
    }



    function filter(Request $request){
        $start_date = Carbon::parse($request->desde)
        ->toDateTimeString();

        $end_date = Carbon::parse($request->hasta)
        ->toDateTimeString();

        return Prestamointerno::whereBetween('fecha', [
$start_date, $end_date
])->get();
       
    }
}
