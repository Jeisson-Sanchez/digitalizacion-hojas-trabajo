@extends('layouts.plantillabase')

@section('contenido')
<a href="ordenes/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID Orden</th>
            <th scope="col">Cliente</th>
            <th scope="col">Producto</th>
            <th scope="col">Id Orden Anterior</th>
            <th scope="col">Fecha Creación</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Fecha de Vencimiento</th>
            <th scope="col">Observaciones</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ordenes as $orden)
        <tr>
            <td>{{ $orden->id_orden}}</td>
            <td>{{ $orden->cliente_id}}</td>
            <td>{{ $orden->producto_id}}</td>
            <td>{{ $orden->id_orden_anterior}}</td>
            <td>{{ $orden->fecha_creacion}}</td>
            <td>{{ $orden->nombre}}</td>
            <td>{{ $orden->cantidad}}</td>
            <td>{{ $orden->fecha_vencimiento}}</td>
            <td>{{ $orden->observaciones}}</td>
            <td>
                <a href="/ordenes/{{ $ordenes->id_orden}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection