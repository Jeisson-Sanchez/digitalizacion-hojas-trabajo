@extends('layouts.plantillabase')

@section('contenido')

<h2>EDITAR REGISTROS</h2>

<form action="/productos/{{$producto->id_producto}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Retiro</label>
        <input id="retiro" name="retiro" type="text" class="form-control" tabindex="1" value="{{$producto->retiro}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Numeracion Inicial</label>
        <input id="numeracion_ini" name="numeracion_ini" type="number" class="form-control" tabindex="2" value="{{$producto->numeracion_ini}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Numeracion Fin</label>
        <input id="numeracion_fin" name="numeracion_fin" type="number" class="form-control" tabindex="3" value="{{$producto->numeracion_fin}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tamaño</label>
        <input id="tamano" name="tamano" type="text" class="form-control" tabindex="4" value="{{$producto->tamano}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Papel ID</label>
        <input id="papel_id" name="papel_id" type="number" class="form-control" tabindex="5" value="{{$producto->papel_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Corte ID</label>
        <input id="corte_id" name="corte_id" type="number" class="form-control" tabindex="6" value="{{$producto->corte_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tiro ID</label>
        <input id="tiro_id" name="tiro_id" type="number" class="form-control" tabindex="7" value="{{$producto->tiro_id}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tipo Impresion ID</label>
        <input id="tipo_impresion_id" name="tipo_impresion_id" type="number" class="form-control" tabindex="8" value="{{$producto->tipo_impresion_id}}">
    </div>

    <a href="/productos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection