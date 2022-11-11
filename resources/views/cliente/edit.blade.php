@extends('layouts.plantillabase')

@section('contenido')

<h2>EDITAR CLIENTES</h2>

<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">NIT</label>
        <input id="nit_cliente" name="nit_cliente" type="text" class="form-control" tabindex="1" value="{{$cliente->nit_cliente}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre Cliente</label>
        <input id="nom_cliente" name="nom_cliente" type="text" class="form-control" tabindex="2" value="{{$cliente->nom_cliente}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Representante Legal</label>
        <input id="repre_legal" name="repre_legal" type="text" class="form-control" tabindex="3" value="{{$cliente->repre_legal}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha de Creacion</label>
        <input id="fecha_creada" name="fecha_creada" type="date" class="form-control" value="{{$cliente->fecha_creada}}">
    </div>
    <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection