@extends('layouts.app')

@section('title', 'Editar Inscripción')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Inscripción</h1>

    <form action="{{ route('inscripciones.update', $inscripcion->id_inscripcion) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_alumno" class="form-label">Alumno</label>
            <select class="form-select" id="id_alumno" name="id_alumno" required>
                @foreach ($alumnos as $alumno)
                    <option value="{{ $alumno->id_alumno }}" {{ $inscripcion->id_alumno == $alumno->id_alumno ? 'selected' : '' }}>{{ $alumno->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_nivel" class="form-label">Nivel</label>
            <select class="form-select" id="id_nivel" name="id_nivel" required>
                @foreach ($niveles as $nivel)
                    <option value="{{ $nivel->id_nivel }}" {{ $inscripcion->id_nivel == $nivel->id_nivel ? 'selected' : '' }}>{{ $nivel->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_curso" class="form-label">Curso</label>
            <select class="form-select" id="id_curso" name="id_curso" required>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id_curso }}" {{ $inscripcion->id_curso == $curso->id_curso ? 'selected' : '' }}>{{ $curso->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_profesor" class="form-label">Profesor</label>
            <select class="form-select" id="id_profesor" name="id_profesor" required>
                @foreach ($profesores as $profesor)
                    <option value="{{ $profesor->id_profesor }}" {{ $inscripcion->id_profesor == $profesor->id_profesor ? 'selected' : '' }}>{{ $profesor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha_inscripcion" class="form-label">Fecha de Inscripción</label>
            <input type="date" class="form-control" id="fecha_inscripcion" name="fecha_inscripcion" value="{{ $inscripcion->fecha_inscripcion }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection