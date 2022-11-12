@extends('layouts.plantillabase')

@section('contenido')

<h2>EDITAR ORDENES</h2>

<form action="/ordenes" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Fecha Creacion</label>
        <input id="fecha_creacion" name="fecha_creacion" type="date" class="form-control" tabindex="1" value="{{$orden->fecha_creacion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{$orden->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" value="{{$orden->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha Venciamiento</label>
        <input id="fecha_vencimiento" name="fecha_vencimiento" type="date" class="form-control" tabindex="4" value="{{$orden->fecha_vencimiento}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Observaciones</label>
        <input id="observaciones" name="observaciones" type="text" class="form-control" tabindex="5" value="{{$orden->observaciones}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cliente</label>
        <input id="cliente_id" name="cliente_id" type="number" class="form-control" tabindex="6" value="{{$orden->cliente_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Producto</label>
        <input id="producto_id" name="producto_id" type="number" class="form-control" tabindex="7" value="{{$orden->producto_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ID Orden Anterior</label>
        <input id="id_orden_anterior" name="id_orden_anterior" type="number" class="form-control" tabindex="7" value="{{$orden->id_orden_anterior}}">
        <input id="id" name="id" type="hidden" value="{{$orden->id_orden}}">
    </div>
    <a href="/orden" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection