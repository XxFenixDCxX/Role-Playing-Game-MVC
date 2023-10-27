<?php
require_once(dirname(__FILE__) . '/../../../../utils/SessionUtils.php');
require_once(dirname(__FILE__) . '\..\..\..\..\persistence\DAO\creatureDAO.php');
require_once(dirname(__FILE__) . '\..\..\..\models\Creature.php');
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $offerDAO = new OfferDAO();
    $offer = $offerDAO->selectById($id);
}
?>
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
                        <a class="nav-link" href="../../../public/views/user/logout.php"><?php
                            if (SessionUtils::loggedIn()) {
                                echo $_SESSION['user'];
                            } else {
                                header('Location: ../../public/views/index.php');
                            }
                            ?></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Editar Criaturas</h5>
                            <form class="form-horizontal" method="post" action="../../../controllers/offer/editController.php">
                                <div class="form-group">
                                    <label for="company" class="col-sm-2 control-label">Company</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="company" id="company" placeholder="Empresa" value="<?php echo $offer->getCompany(); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="position" class="col-sm-2 control-label">Position</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="position" name="position" placeholder="Cargo" value="<?php echo $offer->getPosition(); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="function" class="col-sm-2 control-label">Function</label>
                                    <div class="col-sm-10">
                                        <input type="textbox" class="form-control" id="function" name="function" placeholder="Función" value="<?php echo $offer->getFunction(); ?>">
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $offer->getIdOffer(); ?>">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Edit</button>
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