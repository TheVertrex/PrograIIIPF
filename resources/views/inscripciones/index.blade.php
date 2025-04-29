@extends('layouts.app')

@section('title', 'Gestión de Inscripciones')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Gestión de Inscripciones</h1>
    <a href="{{ route('inscripciones.create') }}" class="btn btn-primary">Registrar Inscripción</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Alumno</th>
            <th>Nivel</th>
            <th>Curso</th>
            <th>Profesor</th>
            <th>Fecha de Inscripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($inscripciones as $inscripcion)
        <tr>
            <td>{{ $inscripcion->id_inscripcion }}</td>
            <td>{{ $inscripcion->alumno->nombre }}</td>
            <td>{{ $inscripcion->nivel->nombre }}</td>
            <td>{{ $inscripcion->curso->nombre }}</td>
            <td>{{ $inscripcion->profesor->nombre }}</td>
            <td>{{ $inscripcion->fecha_inscripcion }}</td>
            <td>
                <a href="{{ route('inscripciones.edit', $inscripcion->id_inscripcion) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('inscripciones.destroy', $inscripcion->id_inscripcion) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta inscripción?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection