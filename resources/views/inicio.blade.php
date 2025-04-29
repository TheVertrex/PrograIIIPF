<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="/sliderbar/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .mode-images {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 10px;
        }

        .mode-image {
            width: 400px; /* Incrementado el ancho para mayor visibilidad */
            height: auto;
            transition: opacity 0.3s ease;
        }

        .mode-image.light-mode {
            display: block;
        }

        .mode-image.dark-mode {
            display: none;
        }

        body.dark-mode .mode-image.light-mode {
            display: none;
        }

        body.dark-mode .mode-image.dark-mode {
            display: block;
        }

        .main-content {
            min-height: 100vh;
            margin-left: var(--sidebar-width);
            padding: 20px;
            transition: margin-left 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <i class="fas fa-code"></i>
                    <span>DashBoard</span>
                </div>
                <div class="toggle-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ route('inicio') }}" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span>Inicio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('alumnos.index') }}" class="nav-link">
                        <i class="fas fa-users"></i>
                        <span>Alumnos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('inscripciones.index') }}" class="nav-link">
                        <i class="fas fa-book"></i>
                        <span>Inscripciones</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-box"></i>
                        <span>Cursos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-graduation-cap"></i>
                        <span>Niveles</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Profesores</span>
                    </a>
                </li>
            </ul>
        </aside>

        <div class="main-content">
            <div class="topbar">
                <div class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <h2>Inicio---------              </h2>
            </div>

            <div class="content-section">
                <h2>Bienvenido a la Página de Inicio</h2>
                <p>Selecciona una opción del menú lateral para comenzar.</p>
            </div>
        </div>
    </div>

    <script src="/sliderbar/script.js"></script>
</body>
</html>