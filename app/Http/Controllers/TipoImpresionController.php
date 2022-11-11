<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoImpresion;

class TipoImpresionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos_impresion = TipoImpresion::all();
        return view('tipo_impresion.index')->with('tipos_impresion', $tipos_impresion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos_impresion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipos_impresion = new TipoImpresion();
        $tipos_impresion->tipo = $request->get('tipo');
        $tipos_impresion->descripcion = $request->get('descripcion');
        $tipos_impresion->estado = $request->get('estado');

        $tipos_impresion->save();

        return redirect('/tipo_impresion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_tipo_impresion)
    {
        $tipos_impresion = TipoImpresion::find($id_tipo_impresion);
        return view('tipo_impresion.edit')->with('tipo_impresion', $tipos_impresion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
