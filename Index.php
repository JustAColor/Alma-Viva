<?php
    include_once 'class/usuario.php';
    include_once 'class/session.php';
    $userSession = new Session();
    $user = new Usuario();

    if (isset($_SESSION['username'])) {
        $user->setUser($userSession->getCurrentUser());
        include_once 'vistas/inicio.php';
    } else if(isset($_POST['btnIngresar'])) {
        $userForm = $_POST['txtUser'];
        $passForm = $_POST['txtPass'];
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