@extends('layouts.app')

@section('content')
    <h1>Formulario de Contacto</h1>
    <form method="POST" action="{{ route('contacto.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje"></textarea><br>
        <button type="submit" class="btnes">Enviar</button>
    </form>
@endsection