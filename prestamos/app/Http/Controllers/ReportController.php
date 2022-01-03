<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Prestamointerno;
class ReportController extends Controller
{
    //
    public function index()
    {
        return view('iniciorep');
    }

    public function dailyReport(Request $request)
    {
        $start_date = Carbon::parse($request->start_date)
                            ->toDateTimeString();
        $end_date = Carbon::parse($request->end_date)
                            ->toDateTimeString();
        $users = Prestamointerno::whereBetween('fecha',[$start_date,$end_date])->get();
        return view('report',compact('users'));
    }
}
