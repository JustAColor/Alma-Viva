<?php
include_once 'module/router.php';
include_once 'class/session.php';
?>
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
    <title><?php echo $_GET['load']?></title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-success navbar-dark">

<!-- Brand -->

<a class="navbar-brand" href="?load=home">Inicio</a>

<!-- Toggler/collapsibe Button -->

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">

<span class="navbar-toggler-icon"></span>

</button>

<!-- Navbar links -->

<div class="collapse navbar-collapse" id="collapsibleNavbar">

<ul class="navbar-nav">

<li class="nav-item">


<?php
   if (isset($_SESSION['session_start'])) {
    if ($_SESSION['session_start']==true){
        echo "<a class='nav-link' href='?load=chat'>chat</a>";
    }
}
?>
</li>



<li class="nav-item">
<?php
    if (isset($_SESSION['session_start'])) {
        if ($_SESSION['session_start']==true){
            echo "<a class='nav-link '  href='class/logout.php'>Cerrar Sesion</a>";
            
        }
        
    } else {
            echo "<a class='nav-link '  href='?load=login'>Iniciar Sesion</a>";
    }
  
?>
</li>

</ul>

</div>

</nav>
<main>
<section>
<!--traer vistas con el enrutador-->

</section>
</main>
</body>
</html>

<?php
            //Unir el archivo enrutador.php a la vista del index para llamar la clase Enrutador
            include_once ('Module/router.php');
            //Crear variable para instanciar la clase Enrutador y así poder acceder al metodo loadView (Cargar vista)
            $enrutador = new Router();
            //Condicion para validad que la variable por GET llamada load si llega vacia darle una ruta, osea inicio
            if (!isset($_GET['load']))
            {
              
                $_GET['load'] = 'home';
                //Llamar la funcion cargar vista(loadView) para enviar la vista solicitada por el usuario
                $enrutador->loadView($_GET['load']);
              
            }
            else
            {
                $enrutador->loadView($_GET['load']);
            }
        ?>

