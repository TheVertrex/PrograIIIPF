@extends('layouts.app')

@section('title', 'Editar Alumno')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Alumno</h1>

    <form action="{{ route('alumnos.update', $alumno->id_alumno) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $alumno->nombre }}" required maxlength="50">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $alumno->email }}" required maxlength="30">
        </div>

        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" value="{{ $alumno->numero }}" required maxlength="8">
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $alumno->direccion }}" required maxlength="50">
        </div>

        <div class="mb-3">
            <label for="id_sucursal" class="form-label">Sucursal</label>
            <select class="form-select" id="id_sucursal" name="id_sucursal" required>
                @foreach ($sucursales as $sucursal)
                    <option value="{{ $sucursal->id_sucursal }}" {{ $alumno->id_sucursal == $sucursal->id_sucursal ? 'selected' : '' }}>{{ $sucursal->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection