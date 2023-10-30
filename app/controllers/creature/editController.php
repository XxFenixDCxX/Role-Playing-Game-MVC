<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/Creature.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Llamo a la función en cuanto se redirige el action a esta página mediante metodo POST
    editAction();
}
// Función encargada de crear nuevas ofertas
function editAction() {
    // Obtención de los valores del formulario y validación    
    $id = $_POST["idCreature"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $avatar = $_POST["avatar"];
    $attackPower = $_POST["attackPower"];
    $lifeLevel = $_POST["lifeLevel"];
    $weapon = $_POST["weapon"];
    // Creación de objeto auxiliar   
    $creature = new Creature();
    $creature->setIdCreature($id);
    $creature->setName($name);
    $creature->setDescription($description);
    $creature->setAvatar($avatar);
    $creature->setAttackPower($attackPower);
    $creature->setLifeLevel($lifeLevel);
    $creature->setWeapon($weapon);
    //Creamos un objeto OfferDAO para hacer las llamadas a la BD
    $creatureDAO = new CreatureDAO();
    $creatureDAO->update($creature);

    header('Location: ../../../index.php');
}

?>

