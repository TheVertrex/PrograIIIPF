@extends('layouts.sidebar')

@section('content')
<div class="topbar">
    <h1>Agregar Alumno</h1>
</div>

<form action="{{ route('alumnos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="numero" class="form-label">Número</label>
        <input type="text" class="form-control" id="numero" name="numero" required>
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" required>
    </div>
    <div class="mb-3">
        <label for="sucursal" class="form-label">Sucursal</label>
        <select class="form-select" id="sucursal" name="sucursal" required>
            @foreach ($sucursales as $sucursal)
                <option value="{{ $sucursal->id }}">{{ $sucursal->nombre }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection