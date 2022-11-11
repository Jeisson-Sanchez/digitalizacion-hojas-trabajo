@extends('layouts.plantillabase')

@section('contenido')
<a href="cliente/create" class="btn btn-primary">CREAR CLIENTE</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">NIT</th>
            <th scope="col">Nombre Cliente</th>
            <th scope="col">Representante Legal</th>
            <th scope="col">Fecha de Creacion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nit_cliente}}</td>
            <td>{{ $cliente->nom_cliente}}</td>
            <td>{{ $cliente->repre_legal}}</td>
            <td>{{ $cliente->fecha_creada}}</td>
            <td>
                <a href="/cliente/{{ $cliente->id_cliente}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection