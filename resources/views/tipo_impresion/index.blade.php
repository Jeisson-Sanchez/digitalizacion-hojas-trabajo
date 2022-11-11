@extends('layouts.plantillabase');

@section('contenido')
<a href="tiros/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">Tiro</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tiros as $tiro)
        <tr>
            <td>{{ $tiro->tiro}}</td>
            <td>{{ $tiro->descripcion}}</td>
            <td>{{ $tiro->estado}}</td>
            <td>
                <a href="/tiros/{{ $tiro->id_tiro}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection