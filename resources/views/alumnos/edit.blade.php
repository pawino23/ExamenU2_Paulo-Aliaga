@extends('layouts.app')

@section('content')
    <h1>Editar Datos del Alumno</h1>
    <form method="POST" action="/alumno/{{ $alumno->id }}">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $alumno->nombre }}"><br>
        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" value="{{ $alumno->curso }}"><br>
        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" value="{{ $alumno->nota1 }}"><br>
        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" value="{{ $alumno->nota2 }}"><br>
        <button type="submit" class="btnes">Guardar Cambios</button>
    </form>
@endsection