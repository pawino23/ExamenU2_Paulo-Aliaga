@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ingresar Nuevo Alumno</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>

        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" required>

        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" required>

        <button type="submit" class="btnes">Guardar</button>
    </form>
</div>
@endsection