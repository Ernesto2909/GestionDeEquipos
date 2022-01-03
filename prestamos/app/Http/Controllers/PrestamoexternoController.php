<?php

namespace App\Http\Controllers;

use App\Models\Prestamoexterno;
use Illuminate\Http\Request;

/**
 * Class PrestamoexternoController
 * @package App\Http\Controllers
 */
class PrestamoexternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestamoexternos = Prestamoexterno::paginate();

        return view('prestamoexterno.index', compact('prestamoexternos'))
            ->with('i', (request()->input('page', 1) - 1) * $prestamoexternos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestamoexterno = new Prestamoexterno();
        return view('prestamoexterno.create', compact('prestamoexterno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prestamoexterno::$rules);

        $prestamoexterno = Prestamoexterno::create($request->all());

        return redirect()->route('prestamoexternos.index')
            ->with('success', 'Prestamoexterno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestamoexterno = Prestamoexterno::find($id);

        return view('prestamoexterno.show', compact('prestamoexterno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestamoexterno = Prestamoexterno::find($id);

        return view('prestamoexterno.edit', compact('prestamoexterno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prestamoexterno $prestamoexterno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamoexterno $prestamoexterno)
    {
        request()->validate(Prestamoexterno::$rules);

        $prestamoexterno->update($request->all());

        return redirect()->route('prestamoexternos.index')
            ->with('success', 'Prestamoexterno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prestamoexterno = Prestamoexterno::find($id)->delete();

        return redirect()->route('prestamoexternos.index')
            ->with('success', 'Prestamoexterno deleted successfully');
    }
}
