<?php


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="Style/css/master.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

    <div class="login-box">
      <img src="img/logo2.jpg" class="avatar" alt="Avatar Image">
      <h1 style="color:white;">Ingresar</h1>
      <form>
        <!-- USERNAME INPUT -->
      
        <input type="text" placeholder="usuario" class="form-control" name="txtUser">
        <!-- PASSWORD INPUT -->
        
        <input type="password" placeholder=" contraseña" class="form-control" name="txtPass">
        <input type="submit" name="btnIngresar" class="btn btn-primary btn-block" value="ingresar">
        <a href="?load=registrar">No tienes cuenta?</a>
      </form>
    </div>
  </body>
</html>
