<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '\..\..\..\..\persistence\DAO\CreatureDAO.php');
require_once(dirname(__FILE__) . '\..\..\..\models\Creature.php');
// Analize session
require_once(dirname(__FILE__) . '\..\..\..\..\utils\SessionUtils.php');
//Compruebo que me llega por GET el parámetro
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    //Creamos un objeto OfferDAO para hacer las llamadas a la BD
    $creatureDAO = new CreatureDAO();
    $creature = $creatureDAO->selectById($id);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Mas Informacion</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    </head>
    <body>
         <!-- Navigation -->
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
        <!-- Page Content -->
        <div class="container">
            <div class="card" >
                <div class="card-block">
                    <img src="<?php echo (isset($_GET["id"])? $creature->getAvatar() : "") ; ?>" alt="Imagen de criatura"/>
                    <h2 class="card-title"> <?php  
                            echo (isset($_GET["id"])? $creature->getName() : "") ;                    
                     ?></h2>
                    <i class=" card-text description"> <?php 
                            echo (isset($_GET["id"])? $creature->getDescription() : "") ;    
                    ?></i>  
                    <p class=" card-text description">Poder de ataque:  <?php 
                            echo (isset($_GET["id"])? $creature->getAttackPower() : "") ;    
                    ?></p>
                    <p class=" card-text description">Nivel de Vida:  <?php 
                            echo (isset($_GET["id"])? $creature->getLifeLevel() : "") ;    
                    ?></p>
                    <p class=" card-text description">Arma:  <?php 
                            echo (isset($_GET["id"])? $creature->getWeapon() : "") ;    
                    ?></p> 
                </div>
                
                <div  class=" btn-group card-footer" role="group">
                    <a type="button" class="btn btn-success" href="edit.php?id=<?php 
                            echo (isset($_GET["id"])? $creature->getIdCreature() : "") ;    
                    ?><">Modificar</a> 
                    <a type="button" class="btn btn-danger" href="../../../controllers/creature/deleteController.php?id=<?php 
                            echo (isset($_GET["id"])? $creature->getIdCreature() : "") ;    
                    ?><?>">Borrar</a> 
                </div>
            </div>
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; A. F. 2017</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.container -->
        <!-- Java Script Boostrap-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
    </body>
</html>

