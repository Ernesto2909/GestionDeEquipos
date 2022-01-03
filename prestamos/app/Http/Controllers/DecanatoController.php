<?php

namespace App\Http\Controllers;

use App\Models\Decanato;
use Illuminate\Http\Request;

/**
 * Class DecanatoController
 * @package App\Http\Controllers
 */
class DecanatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decanatos = Decanato::paginate();

        return view('decanato.index', compact('decanatos'))
            ->with('i', (request()->input('page', 1) - 1) * $decanatos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $decanato = new Decanato();
        return view('decanato.create', compact('decanato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Decanato::$rules);

        $decanato = Decanato::create($request->all());

        return redirect()->route('decanatos.index')
            ->with('success', 'Decanato created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decanato = Decanato::find($id);

        return view('decanato.show', compact('decanato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decanato = Decanato::find($id);

        return view('decanato.edit', compact('decanato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Decanato $decanato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Decanato $decanato)
    {
        request()->validate(Decanato::$rules);

        $decanato->update($request->all());

        return redirect()->route('decanatos.index')
            ->with('success', 'Decanato updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $decanato = Decanato::find($id)->delete();

        return redirect()->route('decanatos.index')
            ->with('success', 'Decanato deleted successfully');
    }
}
