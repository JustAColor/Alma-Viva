<?php
include_once ("Conexion.php");

class pagos
{
    private $idPago;
    private $cedulaEmpleado;
    private $horas;
    private $valorHora;
    private $totalPago;

    public function __construct()
    {
        $this->conexion= new conexion;
    }

    public function __SET($atributo,$valor){
        $this->$atributo = $valor;
    }

    public function __GET($atributo){
        return $this->$atributo;
    }

    public function listarPago()
    {
        $sql = "SELECT IdPago, CedulaEmpleado, Horas, ValorHora, TotalPago FROM tblpagos";
        $tabla = $this->conexion->consultaRetorno($sql);
        return $tabla;
    }
    
    public function registrarPago()
    { 
        $validarDato = "SELECT * FROM tblpagos where CedulaEmpleado ='{$this->cedulaEmpleado}'";
        $resultado = $this->conexion->consultaRetorno($validarDato);
        $canFilas=mysqli_num_rows($resultado);
        $sql ="INSERT INTO tblpagos(CedulaEmpleado, Horas, ValorHora, TotalPago)
        values('{$this->cedulaEmpleado}','{$this->horas}','{$this->valorHora}','{$this->totalPago}')";
        $this->conexion->consultaSimple($sql);
        return true;
    }
    
    public function eliminarPago()
    {
        $sql = "DELETE FROM tblpagos WHERE IdPago='{$this->idPago}'";
        $this->conexion->consultaSimple($sql);
        return true;
    }

    public function buscarPagoId()
    {
        $sql = "SELECT * FROM tblpagos WHERE IdPago = '{$this->idPago}'";
        $tabla = $this->conexion->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($tabla);
        return $row;
    }
}
?>