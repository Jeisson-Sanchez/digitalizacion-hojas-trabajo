<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Orden::all();
        return view('orden.index')->with('ordenes', $ordenes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orden.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ordenes = new Orden();
        $ordenes->cliente_id = $request->get('cliente_id');
        $ordenes->producto_id = $request->get('producto_id');
        $ordenes->id_orden_anterior = $request->get('id_orden_anterior');
        $ordenes->fecha_creacion = $request->get('fecha_creacion');
        $ordenes->nombre = $request->get('nombre');
        $ordenes->cantidad = $request->get('cantidad');
        $ordenes->fecha_vencimiento = $request->get('fecha_vencimiento');
        $ordenes->observaciones = $request->get('observaciones');

        $ordenes->save();

        return redirect('/ordenes');
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
    public function edit($id_orden)
    {
        $ordenes = Orden::find($id_orden);
        return view('orden.edit')->with('orden', $ordenes);
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
