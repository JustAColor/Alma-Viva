<?php
    class Router{
        public function loadView($vista){
            switch ($vista) {
                case 'chat':
                    include_once $vista.'.php';
                    break;
                case 'registrar':
                    include_once 'vistas/'.$vista.'.php';
                    break;
                case 'home':
                    include_once 'vistas/'.$vista.'.php';
                    break;
                default:
                    include_once 'vistas/'.$vista.'.php';
                    break;
            }
        }
    }
?>