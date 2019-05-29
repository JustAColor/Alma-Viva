
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
      <input type="text" class="form-control" name="txtEdad" required placeholder="Edad">
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
            <button name="btnRegistrar" class="btn btn-primary btn-block">Registrarse</button>
        </div>
        <div class="form-group">
            <?php if(isset($mensage) && $mensage != ""){ echo $mensage;}?>
            </div>
        </div>
    </form>
</div>

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