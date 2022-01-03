<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamointerno;
use App\Models\Interno;
use App\Models\Equipo;
use DB;
use Carbon\Carbon;
class EstadisticaController extends Controller
{
    //

   public function index()
    {
        $prestamointernos = Prestamointerno::paginate();
        
        return view('estadisticas.index');

    }

   // public function filter(Request $request){
     //   $fromdate=$request->fromdate;
     //  $todate=$request->todate;
     //   $data= DB::select("SELECT*FROM prestamointernos WHERE fecha BETWEEN '$fromdate' AND '$todate'");
     //   return view('estadisticas.index', compact('data'));

   // }

    public function filter(Request $request) 
{
  $fromdate=$request->fromdate;
       $todate=$request->todate;
    $prestamo = Prestamointerno::whereBetween('fecha',[$request->fromdate, $request->todate])
         ->get();
         return view('estadisticas.index', compact('prestamo'));
}

    ///public function daily_report(Request $request)
  //  {
  //     $start_date = Carbon::parse($request->fromdate)
///->toDateTimeString();
//
      // $end_date = Carbon::parse($request->todate)
                          //   ->toDateTimeString();

       //$result= Prestamointerno::whereBetween('fecha', [
      //   $start_date, $end_date
      // ])->get();
    //   return view('estadisticas.index', compact('result'));
   // }

   
}
