<?php
include_once ("Modulos/controladorPagos.php");
include_once ("Modulos/controladorEmpleados.php");
$pagos = new PagosControlador();
$empleados = new EmpleadosControlador();
$listaEmpleados = $empleados->listaEmpleados();
if (isset($_POST['btnRegistrar']))
{
    $datosPagos = $pagos->insertarPago($_POST['selCedula'], $_POST['txtHoras'], $_POST['txtValorHoras']);
    if ($datosPagos == true)
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
    <h3><b>Registro de pagos a empleados</b></h3>
    <br>
    <form action="" method="post" class="form-horizontal">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="selCedula" class="control-label col-md-3">Cédula Empleado:</label>
                    <div class="col-md-9" >
                        <select name="selCedula" id="" class="form-control" required>
                            <option value="" selected="selected">Seleccione un empleado</option>
                            <?php foreach ($listaEmpleados as $value): ?>
                                <option value="<?php echo $value['CedulaEmpleado']?>"><?php echo $value['CN']?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="form-group" >
                    <label for="txtHoras" class="control-label col-md-3">Horas Trabajadas:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtHoras" id="" class="form-control" required>
                    </div>
                </div>
                
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="txtValorHoras" class="control-label col-md-3">Valor Horas:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtValorHoras" id="" class="form-control" required>
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
        title: "Ha ocurrido un error en el registro.",
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