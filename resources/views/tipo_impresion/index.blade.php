@extends('layouts.plantillabase');

@section('contenido')
<a href="tipo_impresion/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">Tipo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tipos_impresion as $tipo_impresion)
        <tr>
            <td>{{ $tipo_impresion->tipo}}</td>
            <td>{{ $tipo_impresion->descripcion}}</td>
            <td>{{ $tipo_impresion->estado}}</td>
            <td>
                <a href="/tipo_impresion/{{ $tipo_impresion->id_tipo_impresion}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection