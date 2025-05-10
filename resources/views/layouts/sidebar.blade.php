<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Gestión')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/sliderbar/styles.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Menú</h2>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ route('alumnos.index') }}" class="nav-link">Lista de Alumnos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('alumnos.create') }}" class="nav-link">Agregar Alumno</a>
                </li>
            </ul>
        </aside>
        <main class="main-content">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>