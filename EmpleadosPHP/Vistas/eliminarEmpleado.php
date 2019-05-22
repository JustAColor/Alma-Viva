<?php
    include_once ("Modulos/controladorEmpleados.php");
    $empleados = new EmpleadosControlador();
    if(isset($_GET['id']) && $_GET['id'] != null)
    {
        $row = $empleados->buscarEmpleadoID($_GET['id']);
    }

    if(isset($_POST['btnEliminar']))
    {
        $result = $empleados->eliminarEmpleado($_GET['id']);
        if($result == true)
        {
            $del = true;
        }
        else
        {
            $del = false;
        }
    }
?>

<div class="container style-form">
    <h3><b>Eliminar Empleado</b></h3>
    <br>
    <form action="" method="post" class="form-horizontal">
    <div class="row">
        <div class="col-md-2">       
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <p style="color: red; text-align: center;"><b>¿Estás seguro de eliminar al empleado con Cédula # <?php echo $row['CedulaEmpleado']; ?>?</b></p>
            </div>
            <div class="form-group" align="center">
                <input type="submit" class="btn GreenButton" name="btnEliminar" value="Si">
                <a href="?load=crearEmpleado">
                    <button class="btn RedButton" type="button">No</button>
                </a>
            </div>
        </div>
        <div class="col-md-2">       
        </div>
    </div>
</div>

<?php if (isset($del) && $del == true) :?>

<script type="text/javascript">
$(document).ready(function(){

    swal({
        title: "El empleado fue eliminado correctamente.",
        type: "success",
        confirmButtom: "#3CB371",
        confirmButtonText: "Aceptar",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if(isConfirm){
            window.location = "index.php?load=crearEmpleado";
        }
    });
});
</script>
<?php endif; ?>

<?php if (isset($del) && $del == false) :?>

<script type="text/javascript">
$(document).ready(function(){

    swal({
        title: "Error al eliminar al empleado.",
        type: "error",
        confirmButtom: "#3CB371",
        confirmButtonText: "Aceptar",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if(isConfirm){
            window.location = "index.php?load=crearEmpleado";
        }
    });
});
</script>
<?php endif; ?>