<?php
    class Session
    {
        //funcion session start
        public function __construct(){
            session_start();
        }
        public function setCurrentUser($user){
            $_SESSION['username'] = $user;
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