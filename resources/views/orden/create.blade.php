@extends('layouts.plantillabase')

@section('contenido')

<h2>CREAR ORDEN</h2>

<form action="/orden" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Fecha Creacion</label>
        <input id="fecha_creacion" name="fecha_creacion" type="date" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha Venciamiento</label>
        <input id="fecha_vencimiento" name="fecha_vencimiento" type="date" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Observaciones</label>
        <input id="observaciones" name="observaciones" type="text" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cliente</label>
        <input id="cliente_id" name="cliente_id" type="number" class="form-control" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Producto</label>
        <input id="producto_id" name="producto_id" type="number" class="form-control" tabindex="7">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ID Orden Anterior</label>
        <input id="id_orden_anterior" name="id_orden_anterior" type="number" class="form-control" tabindex="7">
    </div>
    <a href="/orden" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection