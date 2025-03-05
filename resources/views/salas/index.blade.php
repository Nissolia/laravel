@extends('welcome')

@section('content')
    <!-- Botón para mostrar el modal de creación -->
    <button type="button" class="btn btn-primary mt-3 mb-3 w-25" data-bs-toggle="modal" data-bs-target="#createSala">
        Nuevo
    </button>

    {{-- Título de la sección --}}
    <h1 class="text-center mb-4">Listado de salas</h1>

    {{-- Tabla con las salas --}}
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Capacidad</th>
                <th>Proyector</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salas as $sala)
                <tr>
                    <td>{{ $sala->nombre }}</td>
                    <td>{{ $sala->capacidad }}</td>
                    <td>{{ $sala->proyector ? 'Sí' : 'No' }}</td>
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $sala->id }}">
                            Editar
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $sala->id }}">
                            Eliminar
                        </button>
                    </td>
                </tr>
                <!-- Incluir modal de edición y eliminación para cada sala -->
                @include('salas.info')
            @endforeach
        </tbody>
    </table>

    <!-- Modal para crear una nueva sala -->
    @include('salas.create')
@endsection
