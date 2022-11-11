@extends('layouts.plantillabase');

@section('contenido')

<h2>EDITAR TIPO DE IMPRESION</h2>

<form action="/tipos_impresion/{{$tipo_impresion->id_tipo_impresion}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Papel</label>
        <input id="tipo" name="tipo" type="text" class="form-control" tabindex="1" value="{{$tipo_impresion->tipo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$tipo_impresion->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id="estado" name="estado" type="text" class="form-control" tabindex="3" value="{{$tipo_impresion->estado}}">
    </div>
    <a href="/tipos_impresion" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection