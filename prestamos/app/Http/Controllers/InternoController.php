<?php

namespace App\Http\Controllers;

use App\Models\Interno;
use App\Models\Decanato;
use App\Models\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use PDF;
use Carbon;
/**
 * Class InternoController
 * @package App\Http\Controllers
 */
class InternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $internos = Interno::paginate();

        return view('interno.index', compact('internos'))
           ->with('i', (request()->input('page', 1) - 1) * $internos->perPage());
             

    }

    

    public function pdf()
    {
        $internos = Interno::paginate();

        $pdf = PDF::loadView('interno.pdf', ['internos'=>$internos]);
       // $pdf->loadHTML('<h1>Test</h1>');
       return $pdf->stream();
    

        //return view('interno.pdf', compact('internos'));
      

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $interno = new Interno();
        $decana= Decanato::pluck('nombre_decanato','id');
        $carr=Carrera::pluck('nombre_carrera', 'id');
      
        return view('interno.create', compact('interno','decana', 'carr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Interno::$rules);

        $interno = Interno::create($request->all());

        return redirect()->route('internos.index')
            ->with('success', 'Interno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $interno = Interno::find($id);

        return view('interno.show', compact('interno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $interno = Interno::find($id);
        $decana= Decanato::pluck('nombre_decanato','id');
        $carr=Carrera::pluck('nombre_carrera', 'id');
        return view('interno.edit', compact('interno','decana','carr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Interno $interno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interno $interno)
    {
        request()->validate(Interno::$rules);

        $interno->update($request->all());

        return redirect()->route('internos.index')
            ->with('success', 'Interno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $interno = Interno::find($id)->delete();

        return redirect()->route('internos.index')
            ->with('success', 'Interno deleted successfully');
    }
}
