@extends('layouts.sidebar')

@section('content')
<div class="topbar">
    <h1>Gestión de Alumnos</h1>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Número</th>
            <th>Dirección</th>
            <th>Sucursal</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->id_alumno }}</td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->email }}</td>
            <td>{{ $alumno->numero }}</td>
            <td>{{ $alumno->direccion }}</td>
            <td>{{ $alumno->sucursal->nombre }}</td>
            <td>
                <a href="{{ route('alumnos.edit', $alumno->id_alumno) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('alumnos.destroy', $alumno->id_alumno) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este alumno?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection