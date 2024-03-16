<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Xenibu</title>
    <?php require_once 'assets/model/head.php' ?>
</head>
<body>

    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Título a la izquierda -->
                <img src="assets/image/icons/x-r.png" width="40" class="navbar-brand me-auto" href="#">
                <!-- Botón para colapsar el menú en dispositivos pequeños -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Enlace a la izquierda -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Deportes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Futbol</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Elementos a la derecha -->
                <ul class="navbar-nav ml-auto">
                    <!-- Contenedor para los dos párrafos -->
                    <li class="nav-item">
                    <div class="d-flex flex-column me-3">
                        <!-- Primer párrafo -->
                        <p class="navbar-text fw-bold text-start text-md-end" style="margin: 0; font-size: 1rem">Kang</p>
                        <!-- Segundo párrafo -->
                        <p class="navbar-text text-success text-start text-md-end" style="margin: 0;padding:0;font-size: .8rem">$ <span>0</span> POCS</p>
                    </div>
                    </li>
                    <li class="nav-item">
                    <img src="assets/image/user/profile.png" width="60" style="border-radius: 50%;border: 1px solid #ffffff;" alt="Imagen" class="img-fluid">
                    </li>
                    <!-- Sub-menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-gears"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Configuraciones</a></li>
                            <li><a class="dropdown-item" href="#">Historial</a></li>
                            <li><a class="dropdown-item" href="#">Donación</a></li>
                            <li><hr class="d-block d-sm-none dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Cerrar sesión (móvil)</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </nav>
    </header>

    <div class="container border mt-3">
        <main>
            <div class="col-md-4">
                                
            </div>
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                
            </div>
        </main>
    </div>
    
</body>
</html>