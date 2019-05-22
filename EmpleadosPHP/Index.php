<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bd de Nominas</title>
    <link rel="stylesheet" href="Libs/CSS/index.css">
    <!-- Libreria de bootstrap para diseños de formularios -->
    <link rel="stylesheet" href="Libs/CSS/bootstrap.min.css">
    <!-- Libreria de datatables para diseños de tablas -->
    <link rel="stylesheet" href="Libs/CSS/datatables.min.css">
    <!-- Libreria de iconos -->
    <link rel="stylesheet" href="Libs/CSS/font-awesome.min.css">
    <!-- Libreria de cajas de alertas (mensajes) -->
    <link rel="stylesheet" href="Libs/CSS/sweetalert.css">
    <!-- Libreria para traer codigo de javascript con Jquery (Sirve para realizar el dinamismo en la pagina web o aplicativo) -->
    <script type="text/javascript" src="Libs/JS/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="Libs/JS/sweetalert.min.js"> </script>
</head>
<body>
<div class="tituloIndex">
        <header>
            S.I Pagos de Empleados
        </header>
</div>
<div style="position: relative;">
    <nav style="position: absolute; left: 0; top: 20px;">
        <ul>
            <!-- En la etiqueta <a> se va a mandar la variable load con la vista solicitada por el usuario -->
            <li><a href="?load=inicio">Inicio</a></li>
            <li><a href="?load=crearEmpleado">Empleados</a></li>
            <li><a href="?load=crearPago">Nómina</a></li>
        </ul>
    </nav>
</div>
    <br>

    <section>
        <!-- aquí va el codigo para cargar la vista del formulario -->
        <?php
            //Unir el archivo enrutador.php a la vista del index para llamar la clase Enrutador
            include_once ('Modulos/enrutador.php');
            //Crear variable para instanciar la clase Enrutador y así poder acceder al metodo loadView (Cargar vista)
            $enrutador = new Enrutador();
            //Condicion para validad que la variable por GET llamada load si llega vacia darle una ruta, osea inicio
            if (!isset($_GET['load']))
            {
                $_GET['load'] = 'inicio';
                //Llamar la funcion cargar vista(loadView) para enviar la vista solicitada por el usuario
                $enrutador->loadView($_GET['load']);
            }
            else
            {
                $enrutador->loadView($_GET['load']);
            }
        ?>
    </section>


    <footer>
        Derechos reservados &copy; CYBERPUNK 2077
    </footer>
    <!-- librerias de javascript para las tablas, alertas y css de bootstrap -->
    <script type="text/javascript" href="Libs/JS/bootstrap.min.js"> </script>
    <script type="text/javascript" href="Libs/JS/datatables.min.js"> </script>
    <script type="text/javascript" href="Libs/JS/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" href="Libs/JS/jquery.dataTables.min.js"> </script>
    <script type="text/javascript" href="Libs/JS/sweetalert.min.js"> </script>
    <!-- codigo de javascript para las tablas sean en español -->
</body>