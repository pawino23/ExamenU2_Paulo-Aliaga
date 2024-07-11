<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'nota1' => 'required|integer',
            'nota2' => 'required|integer',
        ]);

        $promedio = ($request->nota1 + $request->nota2) / 2;
        $condicion = $promedio >= 13 ? 'Aprobado' : 'Desaprobado';

        Alumno::create([
            'nombre' => $request->nombre,
            'curso' => $request->curso,
            'nota1' => $request->nota1,
            'nota2' => $request->nota2,
            'promedio' => $promedio,
            'condicion' => $condicion,
        ]);

        return redirect()->route('alumnos.index');
    }

    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.edit', compact('alumno'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'nota1' => 'required|integer',
            'nota2' => 'required|integer',
        ]);

        $promedio = ($request->nota1 + $request->nota2) / 2;
        $condicion = $promedio > 11 ? 'Aprobado' : 'Desaprobado';

        $alumno = Alumno::findOrFail($id);
        $alumno->nombre = $request->nombre;
        $alumno->curso = $request->curso;
        $alumno->nota1 = $request->nota1;
        $alumno->nota2 = $request->nota2;
        $alumno->promedio = $promedio;
        $alumno->condicion = $condicion;
        $alumno->save();

        return redirect('/alumnos')->with('success');
    }

    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();

        return redirect()->route('alumnos.index')->with('success');
    }

    public function show($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.show', compact('alumno'));
    }
}