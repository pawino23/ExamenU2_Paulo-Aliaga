<!DOCTYPE html>
<html>
<head>
    <title>Detalle de Alumno</title>
</head>
<body>
    <h1>Detalle de Alumno</h1>
    <p>Nombre: {{ $alumno->nombre }}</p>
    <p>Curso: {{ $alumno->curso }}</p>
    <p>Nota 1: {{ $alumno->nota1 }}</p>
    <p>Nota 2: {{ $alumno->nota2 }}</p>
    <p>Promedio: {{ $alumno->promedio }}</p>
    <p>Condición: {{ $alumno->condicion }}</p>
    <p>Fecha de Registro: {{ $alumno->created_at }}</p>
</body>
</html>