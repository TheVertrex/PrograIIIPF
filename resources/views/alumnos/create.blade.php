@extends('layouts.app')

@section('title', 'Registrar Alumno')

@section('content')
<div class="container">
    <h1 class="mb-4">Registrar Alumno</h1>

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required pattern="[A-Za-z\s]+" maxlength="50" title="Por favor, ingrese solo letras y un máximo de 50 caracteres.">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required maxlength="30" title="Por favor, ingrese un email válido con un máximo de 30 caracteres.">
        </div>

        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" required pattern="\d{1,8}" maxlength="8" title="Por favor, ingrese solo números con un máximo de 8 dígitos.">
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>

        <div class="mb-3">
            <label for="id_sucursal" class="form-label">Sucursal</label>
            <select class="form-select" id="id_sucursal" name="id_sucursal" required>
                @foreach ($sucursales as $sucursal)
                    <option value="{{ $sucursal->id_sucursal }}">{{ $sucursal->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection