<?php
    include_once 'class/conexion.php';
    include_once 'class/chat.php';
    include_once 'class/usuario.php';

    $chatC = new Chat();
    $conn = new Conexion();

     function chat(){
        if (isset($_POST['enviar'])) {
				
    
            $mensaje = $_POST['mensaje'];

            $envio = $chatC->ingresarChat($mensaje);
            return $envio;

    }
}
    $chatC->mostrarChat($_GET['user']);
    $ejecutar = $conn->query($consulta); 
    while($fila = $ejecutar->fetch_array()) :
?>
	<div id="datos-chat">
		<span style="color: #1C62C4;"><?php echo $fila['nombre']; ?></span>
		<span style="color: #848484;"><?php echo $fila['mensaje']; ?></span>
		<span style="float: right;"><?php echo formatearFecha($fila['fecha']); ?></span>
	</div>
<?php endwhile; ?>
