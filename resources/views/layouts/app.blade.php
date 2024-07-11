<!DOCTYPE html>
<html>
<head>
    <title>Gestión Académica</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    @include('includes.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('includes.footer')
</body>
</html>