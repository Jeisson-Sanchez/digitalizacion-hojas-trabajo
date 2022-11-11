@extends('layouts.plantillabase');

@section('contenido')
<a href="papeles/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">Papel</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($papeles as $papel)
        <tr>
            <td>{{ $papel->papel}}</td>
            <td>{{ $papel->descripcion}}</td>
            <td>{{ $papel->estado}}</td>
            <td>
                <a href="/papeles/{{ $papel->id_papel}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection