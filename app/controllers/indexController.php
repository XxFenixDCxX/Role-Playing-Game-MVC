<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/creatureDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Creature.php');
// Obtención de la lista completa de ofertas
function indexAction() {
    $creatureDAO = new CreatureDAO();
    return $creatureDAO->selectAll();
}
?>
