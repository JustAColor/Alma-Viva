<?php 
include_once 'class/user.php';
include_once 'class/session.php';
$userSession = new Session();
$user = new User();

if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    include_once 'view/home.php';
}else if(isset($_POST['btnIngresar'])){
    $userForm = $_POST['txtUsuario1'];
    $passForm = $_POST['txtClave1'];
    if ($user->userExists($userForm, $passForm)) {
       $_SESSION['session_start'] = true;
       $userSession->setCurrentUser($userForm);
       $user->setUser($userForm);
       include_once 'view/home.php';
    } else {
        //si no existe el usuario
        $errorLogin = "Nombre de usuario y/o contraseña incorrecto";
        include_once 'view/login.php';
    }
    
}else{
    include_once 'view/login.php';
}

?>