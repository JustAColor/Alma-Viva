
<head>
    <link rel="stylesheet" href="Style/css/masterR.css">
</head>
<body>
<div class="login-box">
      <img src="img/logo.png" class="avatar" alt="Avatar Image">
      <h1 style="color:white;">registrarse</h1>
      <form method="post" action="index.php">
        <div class="">
      
      
        <div class="form-group">
            <input type="text" placeholder="Usuario " class="form-control" id="user" name="txtUser" required>
        </div>

        <div class="form-group">
            <input type="password" placeholder="Contraseña " class="form-control" id="password" name="txtPassword" required>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Confirmar Contraseña " class="form-control" id="password2" name="txtPassword2" required>
        </div>

        <div class="form-group">
            <input type="text" placeholder="Nombre " class="form-control" name="txtNombre" required>
        </div>
        <div class="form-group">
            <input type="text" placeholder="Apellido" class="form-control" name="txtApellido" required>
        </div>
        <div class="form-group">
            <input type="text" placeholder="Telefono" class="form-control" name="txtTelefono" required>
        </div>
        <div class="form-group ">
        <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Edad">
    </div>
    <div class="col">
      <select name="selGenero" id="" class="custom-select">
          <option value="">Genero</option>
          <option value="m">Masculino</option>
          <option value="f">Femenino</option>
      </select>
    </div>
    
  </div>
  <div class="form-group">
            </div>
            <input type="submit" name="btnRegistrar" class="btn btn-primary btn-block" value="registrarse">
        </div>
        <div class="form-group">
            <?php if(isset($mensage) && $mensage != ""){ echo $mensage;}?>
            </div>
        </div>
    </form>
</div>
<?php
include_once 'class/usuario.php';
$user = new Usuario();
if(isset($_POST['btnRegistrar'])){
        
    $userForm = $_POST['txtUser'];
    if ($user->usuarioVerificacion($userForm)){
        ?>
        <script>
            txt = document.getElementById("user");
            console.log(txt.innerHTML);
            txt.setCustomValidity('El usuario ya existe.');
            //txt.innerHTML="El usuario ya existe.";
        </script>
        <?php
    }else{
        $encript = md5(sha1(md5($_POST['txtClave'])));
        $user->__SET('username', $_POST['txtUser']);
        $user->__SET('pass',  $encript);
        $user->__SET('nombre',  $_POST['txtNombre']);
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
        include_once 'view/login.php';
    }
    
} ?>
<script>

    var password, password2;
    password = document.getElementById('password');
    password2 = document.getElementById('password2');
    
    password.onchange = password2.onkeyup = passwordMatch;
    
    function passwordMatch(){
        if (password.value !== password2.value) {
            password2.setCustomValidity('Las contraseñas no coinciden.');
        } else {
            password2.setCustomValidity('');
        }
    }
   </script>
</body>