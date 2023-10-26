<?php
/**
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
 * 
 **/
?>
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

            <!-- Agrega la opción de Iniciar Sesión -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="iniciar-sesion.html">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
