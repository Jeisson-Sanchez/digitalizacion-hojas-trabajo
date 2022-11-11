@extends('layouts.plantillabase');

@section('contenido')
<a href="cortes/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">Cortes</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cortes as $corte)
        <tr>
            <td>{{ $corte->cortes}}</td>
            <td>{{ $corte->descripcion}}</td>
            <td>{{ $corte->estado}}</td>
            <td>
                <a href="/cortes/{{ $corte->id_corte}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection