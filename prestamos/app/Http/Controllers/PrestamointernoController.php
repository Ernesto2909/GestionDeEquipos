<?php

namespace App\Http\Controllers;

use App\Models\Prestamointerno;
use App\Models\Interno;
use App\Models\Equipo;
use Illuminate\Http\Request;

/**
 * Class PrestamointernoController
 * @package App\Http\Controllers
 */
class PrestamointernoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestamointernos = Prestamointerno::paginate();

        return view('prestamointerno.index', compact('prestamointernos'))
            ->with('i', (request()->input('page', 1) - 1) * $prestamointernos->perPage());
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestamointerno = new Prestamointerno();
        $car=Interno::pluck('carnet', 'id');
        return view('prestamointerno.create', compact('prestamointerno', 'car'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prestamointerno::$rules);

        $prestamointerno = Prestamointerno::create($request->all());

        return redirect()->route('prestamointernos.index')
            ->with('success', 'Prestamointerno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestamointerno = Prestamointerno::find($id);

        return view('prestamointerno.show', compact('prestamointerno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestamointerno = Prestamointerno::find($id);

        return view('prestamointerno.edit', compact('prestamointerno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prestamointerno $prestamointerno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamointerno $prestamointerno)
    {
        request()->validate(Prestamointerno::$rules);

        $prestamointerno->update($request->all());

        return redirect()->route('prestamointernos.index')
            ->with('success', 'Prestamointerno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prestamointerno = Prestamointerno::find($id)->delete();

        return redirect()->route('prestamointernos.index')
            ->with('success', 'Prestamointerno deleted successfully');
    }
}
