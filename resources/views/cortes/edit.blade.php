@extends('layouts.plantillabase');

@section('contenido')

<h2>EDITAR CORTES</h2>

<form action="/cortes/{{$corte->id_corte}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Cortes</label>
        <input id="cortes" name="cortes" type="text" class="form-control" tabindex="1" value="{{$corte->cortes}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$corte->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="text" class="form-control" tabindex="3" value="{{$corte->estado}}">
    </div>
    <a href="/cortes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection