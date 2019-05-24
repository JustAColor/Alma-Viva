<?php
class Session
{
    public function __construct(){
        //funcion session start
        session_start(); // variable $_SESSION['name']
    }
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }
    //metodo para cerrar sesion
    public function closeSession(){
        session_unset();
        session_destroy();
        $_SESSION['session_start'] = false;
    }
}




?>