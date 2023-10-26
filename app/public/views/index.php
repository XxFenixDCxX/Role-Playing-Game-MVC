<?php
require_once(dirname(__FILE__) . '/../../controllers/indexController.php');
$creatures = indexAction();
require_once(dirname(__FILE__) . '/../../../utils/SessionUtils.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="icon" href="../../../assets/img/logo.png" type="image/x-icon">
        <title>Roleplaing Game</title>
    </head>
    <body>
        <nav class="navbar navbar-light bg-secondary text-white">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="../../../assets/img/logo.png" alt="Logo" width="100" height="auto">
                </a>

                <!-- Agrega la opción de Iniciar Sesión -->
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
                    <img src="../../../assets/img/imagenBannerHeroes.jpg" alt="Imagen" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2>Comunidad de usuarios de Heroes</h2>
                    <p>La aventura comienza aqui. En tu navegador</p>
                    <a href="#" class="btn btn-primary">Alta Usuario</a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <?php
                for ($i = 0; $i < sizeof($creatures); $i++) {
                    if (isset($creatures[$i])) {
                        echo $creatures[$i]->publicCreature2HTML();
                    }
                }
             ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
