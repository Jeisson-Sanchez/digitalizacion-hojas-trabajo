@extends('layouts.plantillabase');

@section('contenido')

<h2>EDITAR PAPEL</h2>

<form action="/papeles/{{$papeles->id_papel}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Papel</label>
        <input id="papel" name="papel" type="text" class="form-control" tabindex="1" value="{{$papel->papel}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$papel->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="text" class="form-control" tabindex="3" value="{{$papel->estado}}">
    </div>
    <a href="/papeles" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection