@extends('layouts.plantillabase')

@section('contenido')

<h2>CREAR TIRO</h2>

<form action="/tiros" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Tiro</label>
        <input id="tiro" name="tiro" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="text" class="form-control" tabindex="3">
    </div>
    <a href="/tiros" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection