<?php
class Router
{
    //crear metodo para cargar la vista
    public function loadView($vista){
        switch ($vista) {
            case 'registrar':
                include_once 'vistas/'. $vista .'.php';
                break;
           
            default:
                break;
        }
    }
}

?>