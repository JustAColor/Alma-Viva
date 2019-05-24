<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <!--Registro-->
                <div class="card">
                    <div class="card-header bg-warning text-white">
                        Registro
                    </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="txtUsuario">Usuario:</label>
                                    <input type="text"  name="txtUsuario" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="txtClave">Contraseña:</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="txtClave2">Confirmar contraseña:</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="txtEmail">Email:</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="txtFechaN">Fecha de Nacimiento:</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="txtNombre">Nombre:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="txtApellido">Apellido:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="selGenero">Genero:</label>
                                    <select name="selGenero" id="" class="form-control">
                                        <option value="">Seleccione</option>
                                        <option value="m">Masculino</option>
                                        <option value="f">Femenino</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="selPais">Pais:</label>
                                    <select name="selPais" id="" class="form-control">
                                        <option value="">Seleccione</option>
                                        <option value="1">Colombia</option>
                                        <option value="2">España</option>
                                        <option value="3">Argentina</option>
                                        <option value="4">Peru</option>
                                        <option value="5">Chile</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button name="btnRegistrar" type="submit" class="btn btn-warning btn-block text-white">Registrar</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <!--Login-->
            <div class="card">
                    <div class="card-header bg-warning text-white">
                        Iniciar sesión
                    </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="txtUsuario">Usuario:</label>
                                    <input type="text"  name="txtUsuario1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="txtClave">Contraseña:</label>
                                    <input type="password" name = "txtClave1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <a href="#">Haz olvidado tu contraseña?</a>
                                </div>
                                <div class="form-group">
                                   <button name="btnIngresar" type="submit" class="btn btn-warning btn-block text-white">Ingresar</button>
                                </div>
                        </div>
                </div>
            </div>
        </div>

    </div>
   
</body>
</html>