<?php
    //Crear clase para enrutar las vistas por la url
    class Enrutador
    {
        //crear metodo para cargar la vistaseleccionada por el usuario
        public function loadView($view)
        {
            switch ($view) {
                case 'inicio':
                    include_once ('Vistas/'. $view . '.php');
                    break;
                
                case 'crearEmpleado':
                    include_once ('Vistas/'. $view . '.php');
                    break;

                case 'crearPago':
                    include_once ('Vistas/'. $view . '.php');
                    break;

                case 'editarEmpleado':
                    include_once ('Vistas/'. $view . '.php');
                    break;

                case 'eliminarEmpleado':
                    include_once ('Vistas/'. $view . '.php');
                    break;

                case 'eliminarPago':
                    include_once ('Vistas/'. $view . '.php');
                    break;

                case 'Index':
                    include_once ($view . '.php');
                    break;
                default:
                    include_once ('Vistas/error.php');
                    break;
            }
        }
    }

?>