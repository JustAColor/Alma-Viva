<?php

    include_once 'class/usuario.php';
    include_once 'class/session.php';
    $userSession = new Session();
    $user = new Usuario();

    if (isset($_SESSION['user'])) {

        $user->setUser($userSession->getCurrentUser());
        include_once 'vistas/inicio.php';

    } else if(isset($_POST['btnIngresar'])){
        
        $userForm = $_POST['txtUser'];
        $passForm = $_POST['txtPass'];
       
        if($user->userExist($userForm,$passForm)){

            $_SESSION['session_start'] = true;
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);
            include_once 'vistas/inicio.php';
            

        }else{

            $errorLogin ="Nombre de usuario y/o contraseña no exitse";
            include_once 'vistas/login.php';

        }

    }else {

        include_once 'vistas/inicio.php';
        if(isset($_POST['btnRegistrar'])){
            //var_dump ($_POST['txtPassword'], $_POST['txtUser'],  $_POST['txtNombre'], $_POST['txtApellido'], $_POST['txtEdad'],  $_POST['txtTelefono'],  $_POST['selGenero']);
            $userForm = $_POST['txtUser'];
            if ($user->usuarioVerificacion($userForm)){
                //include_once 'vistas/registrar.php';
                
                ?>
                <script>
                    txt = document.getElementById("user");
                    console.log(txt.innerHTML);
                    
                    txt.innerHTML="El usuario ya existe.";
                </script>
                <?php
            }else{
                
                $encript = md5(sha1(md5($_POST['txtPassword'])));
                $user->__SET('username', $_POST['txtUser']);
                $user->__SET('pass',  $encript);
                $user->__SET('nombre',  $_POST['txtNombre']);
                $user->__SET('edad', $_POST['txtEdad']);
                $user->__SET('telefono',  $_POST['txtTelefono']);
                $user->__SET('apellido',  $_POST['txtApellido']);
                $user->__SET('genero',  $_POST['selGenero']);
                //var_dump(); exit;
                $registro = $user->insertarUsuario();
                if($registro == true){
                    $mensage = '<p class="alert alert-success agiletis" role="alert">
                    Datos registrados correctamente</p>';
                    $user->insertarDatosUsuario();
                }else{
                    $mensage = '<p class="alert alert-danger agiletis" role="alert">
                    Error al registrar, comuniquese con soporte técnico</p>';
                } 
                
                
            }
            
        } 

    }
    
?>
