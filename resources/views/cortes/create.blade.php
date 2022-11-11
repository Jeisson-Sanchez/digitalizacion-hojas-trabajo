@extends('layouts.plantillabase')

@section('contenido')

<h2>CREAR CORTES</h2>

<form action="/cortes" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Cortes</label>
        <input id="cortes" name="cortes" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="text" class="form-control" tabindex="3">
    </div>
    <a href="/cortes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection