<?php
  // Analize session
  require_once('utils/SessionUtils.php');
  // Redirects to login page in public views or private views
  if(SessionUtils::loggedIn())
  {
  // User has already been logged
  header("Location: app/private/views/index.php");
  }
  else
  {
  // Not logged yet, anonimous access
  header("Location: app/public/views/index.php");
  }
?>
<!--
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="icon" href="./assets/img/logo.png" type="image/x-icon">
        <title>Roleplaing Game</title>
    </head>
    <body>
        <nav class="navbar navbar-light bg-secondary text-white">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="./assets/img/logo.png" alt="Logo" width="100" height="auto">
                </a>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="iniciar-sesion.html">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="./assets/img/imagenBannerHeroes.jpg" alt="Imagen" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2>Comunidad de usuarios de Heroes</h2>
                    <p>La aventura comienza aqui. En tu navegador</p>
                    <a href="#" class="btn btn-primary">Alta Usuario</a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="imagen-criatura-1.jpg" class="card-img-top" alt="Imagen Criatura 1">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de la Criatura 1</h5>
                        <p class="card-text">Descripción de la Criatura 1.</p>
                        <a href="#" class="btn btn-primary">Modificar</a>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="imagen-criatura-2.jpg" class="card-img-top" alt="Imagen Criatura 2">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de la Criatura 2</h5>
                        <p class="card-text">Descripción de la Criatura 2.</p>
                        <a href="#" class="btn btn-primary">Modificar</a>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="imagen-criatura-3.jpg" class="card-img-top" alt="Imagen Criatura 3">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de la Criatura 3</h5>
                        <p class="card-text">Descripción de la Criatura 3.</p>
                        <a href="#" class="btn btn-primary">Mostrar mas</a>
                        <a href="#" class="btn btn-primary">Modificar</a>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
-->