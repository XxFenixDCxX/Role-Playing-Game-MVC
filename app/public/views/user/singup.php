<?php
require_once(dirname(__FILE__) . '/../../../../utils/SessionUtils.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Incluye Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Página de Registro</title>
</head>
<body>
    <nav class="navbar navbar-light bg-secondary text-white">
        <div class="container">
            <a class="navbar-brand" href="../../../../index.php">
                <img src="../../../../assets/img/logo.png" alt="Logo" width="100" height="auto">
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./login.php">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Registro de Usuario</h5>
                        <form class="form-horizontal" role="form" method="POST" action="../../../controllers/user/insertController.php">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <h2>Por favor registrate</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label class="sr-only" for="email">Email:</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon"></div>
                                        <input type="text" name="user" class="form-control" id="email"
                                               placeholder="vivayo@correo.com" required autofocus>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="sr-only" for="password">Contraseña:</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" ></div>
                                        <input type="password" name="password" class="form-control" id="password"
                                               placeholder="Password" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-control-feedback">
                                    <span class="text-danger align-middle">
                                        <?php
                                        if (isset($_GET['error']) && !empty($_GET['error'])) {
                                            $error = $_GET['error'];
                                            echo $error;
                                        }
                                        ?> 
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success" value="Register" id="register" name="btnsubmit">Acceder</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


