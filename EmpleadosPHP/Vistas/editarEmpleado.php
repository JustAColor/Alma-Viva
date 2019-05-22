<?php
    include_once ("Modulos/controladorEmpleados.php");
    $empleados = new EmpleadosControlador();
    if (isset($_GET['id']) && $_GET['id'] !=null)
    {
        $row = $empleados->buscarEmpleadoID($_GET['id']);
    }
    else
    {
        header ('Location: crearEmpleado.php');
    }

    
    if (isset($_POST['btnEditar']))
    {
        $update = $empleados->editarEmpleado($_POST['txtNombre'], $_POST['txtEdad'], $_GET['id']);
        if ($update == true)
        {
            $up = true;
        }
        else
        {
            $up = false;
        }
    }
?>

<div class="container style-form">
    <h3><b>Registrar Empleado</b></h3>
    <br>
    <form action="" method="post" class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="txtCedula" class="control-label col-md-3">Cédula Empleado:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtCedula" id="" class="form-control" value="<?php echo $row['CedulaEmpleado']; ?>" required disabled>
                    </div>
                </div>
                <div class="form-group" >
                    <label for="txtNombre" class="control-label col-md-3">Nombre Completo:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtNombre" id="" class="form-control" value="<?php echo $row['NombreEmpleado']; ?>" required>
                    </div>
                </div>
                
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="txtEdad" class="control-label col-md-3">Edad:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtEdad" id="" class="form-control" value="<?php echo $row['Edad']; ?>" required>
                    </div>
                    
                    <div class="form-group" align="right" style="margin-right:3%;">
                        <input type="submit" value="Guardar" class="btn btn-md PurpleButton"  name="btnEditar">
                    </div> 
                </div>
            </div>
        </div>
    </form>
</div>

<?php if (isset($up) && $up == "1") :?>

<script type="text/javascript">
$(document).ready(function(){

    swal({
        title: "Actualización exitosa.",
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

<?php if (isset($up) && $up == "2") :?>

<script type="text/javascript">
$(document).ready(function(){

    swal({
        title: "Error al actualizar.",
        type: "info",
        confirmButtom: "#240022",
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