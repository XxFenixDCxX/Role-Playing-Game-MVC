<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../../persistence/DAO/UserDAO.php');
require_once(dirname(__FILE__) . '/../../../app/models/User.php');
require_once(dirname(__FILE__) . '/../../../app/models/validations/ValidationsRules.php');
require_once(dirname(__FILE__) . '/../../../utils/SessionUtils.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Llamo a la función en cuanto se redirige el action a esta página mediante metodo POST
   createAction();
}
// Función encargada de crear nuevos usuarios
function createAction() {
    // Obtención de los valores del formulario y validación
    $email = ValidationsRules::test_input($_POST["user"]);
    $pass = ValidationsRules::test_input($_POST["password"]);
    // Creación de objeto auxiliar   
    $user = new User();
    $user->setEmail($email);
    $user->setPassword($pass);
    //Creamos un objeto UserDAO para hacer las llamadas a la BD
    $userDAO = new UserDAO();
    if (!$userDAO->check($user)){
        $userDAO->insert($user);
        // Establecemos la sesión
        SessionUtils::startSessionIfNotStarted();
        SessionUtils::setSession($user->getEmail());

        header('Location: ../../../app/private/views/index.php');   
    } else{
        $error = "El usuario ya existe";
        header('Location: ../../../app/public/views/user/singup.php?error=' . urlencode($error));
    }
}

    