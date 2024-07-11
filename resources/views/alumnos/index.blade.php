@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Alumnos</h1>

    <div class="text-right mb-3">
        <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Ingresar nuevo alumno</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Condición</th>
                <th>Fecha de Registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->nota1 }}</td>
                <td>{{ $alumno->nota2 }}</td>
                <td>{{ $alumno->condicion }}</td>
                <td>{{ $alumno->created_at->format('d/m/Y') }}</td>
                <td>
                    <div class="action-buttons">
                        <form action="{{ route('alumnos.edit', $alumno->id) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-warning action-button" title="Editar">
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                            </button>
                        </form>
                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger action-button" title="Eliminar">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
