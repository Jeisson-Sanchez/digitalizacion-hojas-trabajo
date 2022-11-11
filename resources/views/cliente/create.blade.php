@extends('layouts.plantillabase')

@section('contenido')

<h2>CREAR CLIENTES</h2>

<form action="/clientes" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">NIT</label>
        <input id="nit_cliente" name="nit_cliente" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre Cliente</label>
        <input id="nom_cliente" name="nom_cliente" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Representante Legal</label>
        <input id="repre_legal" name="repre_legal" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha Creacion</label>
        <input id="fecha_creada" name="fecha_creada" type="date" class="form-control">
    </div>
    <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection