<?php
include_once ("Modulos/controladorEmpleados.php");
$empleados = new EmpleadosControlador();
$tablaEmpleados = $empleados->index();
if (isset($_POST['btnRegistrar']))
{
    $datosEmpleados = $empleados->insertarEmpleado($_POST['txtCedula'], $_POST['txtNombre'], $_POST['txtEdad']);
    if ($datosEmpleados == true)
    {
        $val = "1";
    }
    else
    {
        $val = "2";
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
                        <input type="text" name="txtCedula" id="" class="form-control" required>
                    </div>
                </div>
                <div class="form-group" >
                    <label for="txtNombre" class="control-label col-md-3">Nombre Completo:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtNombre" id="" class="form-control" required>
                    </div>
                </div>
                
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="txtEdad" class="control-label col-md-3">Edad:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtEdad" id="" class="form-control" required>
                    </div>
                    
                    
                </div>
                <div class="form-group">
                    <div class="form-group" align="right" style="margin-right:3%;">
                        <input type="submit" value="Guardar" class="btn btn-md PurpleButton"  name="btnRegistrar">
                    </div> 
                </div>
            </div>
        </div>
    </form>
</div>

<div class="container style-form">
    <h3 style="text-align:left;" ><b>Empleados Registrados: </b></h3>
    <br>
    <!--Clase de bootstrap para colocar la tabla en responsive-->
    <div class="table-responsive">

        <table class="table table-striped table-bordered nowrap">
            <thead>
                <tr>
                    <th>Cédula Empleado</th>
                    <th>Nombre Completo</th>
                    <th>Edad</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
            <!-- Cuerpo de la tabla (Datos) -->
                <?php 
                    foreach ($tablaEmpleados as $data):
                ?>
                <tr>
                    <td><?php echo $data['CedulaEmpleado']; ?></td>
                    <td><?php echo $data['NombreEmpleado']; ?></td>
                    <td><?php echo $data['Edad']; ?></td>
                    <td>
                        <!--Crear botones -->

                        <a href="?load=editarEmpleado&id=<?php echo $data['CedulaEmpleado'];?>">
                        <button type="button" class="btn BlueButton btn-md">Editar</button></a>

                        <a href="?load=eliminarEmpleado&id=<?php echo $data['CedulaEmpleado'];?>">
                        <button type="button" class="btn RedButton btn-md">Eliminar</button></a>
                    </td>
                </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>

<br><br>
<!-- Si se registró exitosamente devuelve un 1 -->
<?php if (isset($val) && $val == "1") :?>

<script type="text/javascript">
$(document).ready(function(){

    swal({
        title: "Registro exitoso.",
        type: "success",
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
<?php if (isset($val) && $val == "2") :?>

<script type="text/javascript">
$(document).ready(function(){

    swal({
        title: "El documento ya está registrado.",
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