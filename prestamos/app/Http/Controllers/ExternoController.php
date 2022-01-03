<?php

namespace App\Http\Controllers;

use App\Models\Externo;
use Illuminate\Http\Request;

/**
 * Class ExternoController
 * @package App\Http\Controllers
 */
class ExternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $externos = Externo::paginate();

        return view('externo.index', compact('externos'))
            ->with('i', (request()->input('page', 1) - 1) * $externos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $externo = new Externo();
        return view('externo.create', compact('externo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Externo::$rules);

        $externo = Externo::create($request->all());

        return redirect()->route('externos.index')
            ->with('success', 'Externo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $externo = Externo::find($id);

        return view('externo.show', compact('externo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $externo = Externo::find($id);

        return view('externo.edit', compact('externo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Externo $externo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Externo $externo)
    {
        request()->validate(Externo::$rules);

        $externo->update($request->all());

        return redirect()->route('externos.index')
            ->with('success', 'Externo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $externo = Externo::find($id)->delete();

        return redirect()->route('externos.index')
            ->with('success', 'Externo deleted successfully');
    }
}
