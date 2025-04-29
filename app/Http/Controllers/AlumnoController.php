<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::with('sucursal')->get();
        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        $sucursales = \App\Models\Sucursal::all();
        return view('alumnos.create', compact('sucursales'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email',
            'numero' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
            'id_sucursal' => 'required|exists:sucursales,id_sucursal',
        ]);

        Alumno::create($validated);

        return redirect()->route('alumnos.index')->with('success', 'Alumno registrado exitosamente.');
    }

    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        $sucursales = \App\Models\Sucursal::all();
        return view('alumnos.edit', compact('alumno', 'sucursales'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email,' . $id . ',id_alumno',
            'numero' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
            'id_sucursal' => 'required|exists:sucursales,id_sucursal',
        ]);

        $alumno = Alumno::findOrFail($id);
        $alumno->update($validated);

        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();

        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado exitosamente.');
    }
}