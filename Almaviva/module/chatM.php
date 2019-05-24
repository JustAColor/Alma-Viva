<?php
include_once 'class/chat.php';
include_once 'class/conexion.php';
    class ChatMod{
        private $chat;

        public function __construct(){
            $this->chat = new Chat();
        }
        public function incdex(){
            $tabla = $this->chat->mostrarChat();
        }
        public function inertarmensaje(){
            $this->chat->__SET('mensaje', $mensaje);
            $result = $this->chat->ingresarChat();
            return $result;
        }

        public function username(){
            
        }

        


    }
?>