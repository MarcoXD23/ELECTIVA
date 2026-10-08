<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Mi Taller Laravel')</title>
</head>
<body>
    <header>
        <h2>Taller Laravel</h2>
    </header>

    <main>
        @yield('contenido')
    </main>
</body>
</html>
