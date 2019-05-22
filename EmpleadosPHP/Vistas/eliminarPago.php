<?php 
    include_once ("Modulos/controladorPagos.php");
    $pagos = new PagosControlador();
    $tablaPagos = $pagos->index();

    if(isset($_GET['id']) && $_GET['id'] != null)
    {
        $row = $pagos->buscarPagoID($_GET['id']);
    }

    if(isset($_POST['btnEliminar']))
    {
        $result = $pagos->eliminarPago($_GET['id']);
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
    <h3><b>Eliminar Nómina</b></h3>
    <br>
    <form action="" method="post" class="form-horizontal">
    <div class="row">
        <div class="col-md-2">       
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <p style="color: red; text-align: center;"><b>¿Estás seguro de eliminar el pago del empleado con Cédula # <?php echo $row['CedulaEmpleado']; ?>?</b></p>
            </div>
            <div class="form-group" align="center">
                <input type="submit" class="btn btn-success" name="btnEliminar" value="Si">
                <a href="?load=inicio">
                    <button class="btn btn-danger" type="button">No</button>
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
        title: "La nómina fue eliminada correctamente.",
        type: "success",
        confirmButtom: "#3CB371",
        confirmButtonText: "Aceptar",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if(isConfirm){
            window.location = "index.php?load=inicio";
        }
    });
});
</script>
<?php endif; ?>

<?php if (isset($del) && $del == false) :?>

<script type="text/javascript">
$(document).ready(function(){

    swal({
        title: "Error al eliminar la nómina.",
        type: "error",
        confirmButtom: "#3CB371",
        confirmButtonText: "Aceptar",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if(isConfirm){
            window.location = "index.php?load=inicio";
        }
    });
});
</script>
<?php endif; ?>