<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Filter;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('internos/pdf', [App\Http\Controllers\InternoController::class, 'pdf'])->name('internos.pdf');

Route::resource('carreras', App\Http\Controllers\CarreraController::class);
Route::resource('decanatos', App\Http\Controllers\DecanatoController::class);

Route::resource('equipos', App\Http\Controllers\EquipoController::class);
Route::resource('estados', App\Http\Controllers\EstadoController::class);

Route::resource('internos', App\Http\Controllers\InternoController::class);
Route::resource('prestamointernos', App\Http\Controllers\PrestamointernoController::class);


Route::resource('externos', App\Http\Controllers\ExternoController::class);
Route::resource('prestamoexternos', App\Http\Controllers\PrestamoexternoController::class);

//Route::resource('estadistica', App\Http\Controllers\PrestamointernoController::class)->names('estadisticas');
Route::resource('estadistica', App\Http\Controllers\EstadisticaController::class)->names('estadisticas');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//oute::get('/', function () {
    //if (request()->start_date || request()->end_date) {
     //   $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
      //  $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
      //  $data = App\Models\PrestamoInterno::whereBetween('fecha',[$start_date,$end_date])->get();
  //  } else {
    //    $data = App\Models\PrestamoInterno::latest()->get();
   // }
    
  //  return view('estadisticas.index', compact('data'));
//});
Route::get('estadisticas/index', [App\Http\Controllers\EstadisticaController::class, 'filter'])->name('estadisticas.index');
//Route::get('estadisticas/index', [App\Http\Controllers\EstadisticaController::class, 'daily_report'])->name('estadisticas.index');


//Route::redirect('/', 'interno');

//Route::get('interno', [App\Http\Controllers\EstadisticaController::class, 'index'])->name('interno');
//Route::get('estadisticas/index', [App\Http\Controllers\EstadisticaController::class, 'records'])->name('estadisticas.index');

//Route::get('/filter', [Filter::class, 'filter'])->name('web.filter');
//Route::get('/', [App\Http\Controllers\TestController::class, 'index']);
Route::get('/filter', [App\Http\Controllers\TestController::class, 'daily_report'])->name('filter');
    
Route::get('/', [App\Http\Controllers\ReportController::class, 'index'])->name('home');
Route::get('daily-report', [App\Http\Controllers\ReportController::class, 'dailyReport'])->name('daily.report');