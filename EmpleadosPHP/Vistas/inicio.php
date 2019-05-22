<?php 
    include_once ("Modulos/controladorPagos.php");
    $pagos = new PagosControlador();
    $tablaPagos = $pagos->index();

?>
<div class="container style-form">
    <h3><b>Nómina Pagada </b></h3>
    <br>
    <!--Clase de bootstrap para colocar la tabla en responsive-->
    <div class="table-responsive">

        <img src="Imagenes/Empleado.png" alt="">
        <table class="table table-striped table-bordered nowrap">
            <thead>
                <tr>
                    <th>Código Pago</th>
                    <th>Cédula Empleado</th>
                    <th>Horas Trabajadas</th>
                    <th>Valor Hora</th>
                    <th>Total Pagado</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <!-- Cuerpo de la tabla (Datos) -->
                <?php 
                    foreach ($tablaPagos as $data):
                ?>
                <tr>
                    <td><?php echo $data['IdPago']; ?></td>
                    <td><?php echo $data['CedulaEmpleado']; ?></td>
                    <td><?php echo $data['Horas']; ?></td>
                    <td><?php echo $data['ValorHora']; ?></td>
                    <td><?php echo $data['TotalPago']; ?></td>
                    <td>
                        <!--Crear botones para eliminar Pagos -->
                        <a href="?load=eliminarPago&id=<?php echo $data['IdPago'];?>">
                        <button type="button" class="btn btn-danger btn-md">Eliminar</button></a>
                    </td>
                </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>

