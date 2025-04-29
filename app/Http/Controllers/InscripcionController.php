<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use App\Models\Alumno;
use App\Models\Nivel;
use App\Models\Curso;
use App\Models\Profesor;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcion::with(['alumno', 'nivel', 'curso', 'profesor'])->get();
        return view('inscripciones.index', compact('inscripciones'));
    }

    public function create()
    {
        $alumnos = Alumno::all();
        $niveles = Nivel::all();
        $cursos = Curso::all();
        $profesores = Profesor::all();
        return view('inscripciones.create', compact('alumnos', 'niveles', 'cursos', 'profesores'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_alumno' => 'required|exists:alumnos,id_alumno',
            'id_nivel' => 'required|exists:niveles,id_nivel',
            'id_curso' => 'required|exists:cursos,id_curso',
            'id_profesor' => 'required|exists:profesores,id_profesor',
            'fecha_inscripcion' => 'required|date',
        ]);

        Inscripcion::create($validated);

        return redirect()->route('inscripciones.index')->with('success', 'Inscripción registrada exitosamente.');
    }

    public function edit($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $alumnos = Alumno::all();
        $niveles = Nivel::all();
        $cursos = Curso::all();
        $profesores = Profesor::all();
        return view('inscripciones.edit', compact('inscripcion', 'alumnos', 'niveles', 'cursos', 'profesores'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_alumno' => 'required|exists:alumnos,id_alumno',
            'id_nivel' => 'required|exists:niveles,id_nivel',
            'id_curso' => 'required|exists:cursos,id_curso',
            'id_profesor' => 'required|exists:profesores,id_profesor',
            'fecha_inscripcion' => 'required|date',
        ]);

        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->update($validated);

        return redirect()->route('inscripciones.index')->with('success', 'Inscripción actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->delete();

        return redirect()->route('inscripciones.index')->with('success', 'Inscripción eliminada exitosamente.');
    }
}