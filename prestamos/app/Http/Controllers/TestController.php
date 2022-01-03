<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamointerno;
use Carbon\Carbon;

class TestController extends Controller
{
    //
    public function index()
    {   
       return view('filter');
    }

    public function daily_report(Request $request)
    {
       $start_date = Carbon::parse($request->start_date)
                             ->toDateTimeString();

       $end_date = Carbon::parse($request->end_date)
                             ->toDateTimeString();

       return Prestamointerno::whereBetween('fecha',[$start_date,$end_date])->get();

    }
}
