@extends('layouts.plantillabase')

@section('contenido')
<a href="productos/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">Retiro</th>
            <th scope="col">Numeracion Inicial</th>
            <th scope="col">Numeracion Final</th>
            <th scope="col">Tamaño</th>
            <th scope="col">Papel ID</th>
            <th scope="col">Corte ID</th>
            <th scope="col">Tiro ID</th>
            <th scope="col">Tipo Impresion ID</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->retiro}}</td>
            <td>{{ $producto->numeracion_ini}}</td>
            <td>{{ $producto->numeracion_fin}}</td>
            <td>{{ $producto->tamano}}</td>
            <td>{{ $producto->papel_id}}</td>
            <td>{{ $producto->corte_id}}</td>
            <td>{{ $producto->tiro_id}}</td>
            <td>{{ $producto->tipo_impresion_id}}</td>
            <td>
                <a href="/productos/{{ $producto->id_producto}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection