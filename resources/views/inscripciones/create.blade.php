@extends('layouts.app')

@section('title', 'Registrar Inscripción')

@section('content')
<div class="container">
    <h1 class="mb-4">Registrar Inscripción</h1>

    <form action="{{ route('inscripciones.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_alumno" class="form-label">Alumno</label>
            <select class="form-select" id="id_alumno" name="id_alumno" required>
                @foreach ($alumnos as $alumno)
                    <option value="{{ $alumno->id_alumno }}">{{ $alumno->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_nivel" class="form-label">Nivel</label>
            <select class="form-select" id="id_nivel" name="id_nivel" required>
                @foreach ($niveles as $nivel)
                    <option value="{{ $nivel->id_nivel }}">{{ $nivel->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_curso" class="form-label">Curso</label>
            <select class="form-select" id="id_curso" name="id_curso" required>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id_curso }}">{{ $curso->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_profesor" class="form-label">Profesor</label>
            <select class="form-select" id="id_profesor" name="id_profesor" required>
                @foreach ($profesores as $profesor)
                    <option value="{{ $profesor->id_profesor }}">{{ $profesor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha_inscripcion" class="form-label">Fecha de Inscripción</label>
            <input type="date" class="form-control" id="fecha_inscripcion" name="fecha_inscripcion" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection