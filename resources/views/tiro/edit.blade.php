@extends('layouts.plantillabase');

@section('contenido')

<h2>EDITAR TIRO</h2>

<form action="/tiros/{{$tiro->id_tiro}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Papel</label>
        <input id="tiro" name="tiro" type="text" class="form-control" tabindex="1" value="{{$tiro->tiro}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$tiro->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="text" class="form-control" tabindex="3" value="{{$tiro->estado}}">
    </div>
    <a href="/tiros" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection