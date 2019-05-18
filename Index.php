<?php
    include_once 'class/usuario.php';
    include_once 'class/session.php';
    $userSession = new Session();
    $user = new Usuario();

    if (isset($_SESSION['user'])) {
        $user->setUser($userSession->getCurrentUser());
        include_once 'vistas/inicio.php';
    } else if(isset($_GET['btnIngresar'])) {
        $userForm = $_GET['txtUser'];
        $passForm = $_GET['txtPass'];
        if($user->userExist($userForm,$passForm)){
            $_SESSION['session_start'] = true;
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);
            include_once 'vistas/inicio.php';
        }else{
            //si el usuario no existe
            $errorLogin ="Nombre de usuario y/o contraseña no exitse";
            include_once 'vistas/login.php';
        }

    }else {
        include_once 'vistas/login.php';
    }
?>