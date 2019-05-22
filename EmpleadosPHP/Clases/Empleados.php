<?php
include_once ("Conexion.php");

class empleados
{
    private $cedulaEmpleado;
    private $nombreEmpleado;
    private $edad;

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

    public function listarEmpleados(){
        $sql = "SELECT CedulaEmpleado, NombreEmpleado, Edad FROM tblempleados";
        $tabla = $this->conexion->consultaRetorno($sql);
        return $tabla;
    }
    public function registrarEmpleado(){
        $validarDato = "SELECT * FROM tblempleados where CedulaEmpleado ='{$this->cedulaEmpleado}'";
        $resultado = $this->conexion->consultaRetorno($validarDato);
        $canFilas=mysqli_num_rows($resultado);
    if($canFilas>0){
        return false;

    }
    else{
        $sql ="INSERT INTO tblempleados(CedulaEmpleado, NombreEmpleado, Edad)
        values('{$this->cedulaEmpleado}','{$this->nombreEmpleado}','{$this->edad}')";
        $this->conexion->consultaSimple($sql);
        return true;
    }
}
    public function editarEmpleado(){
        $sql = "UPDATE tblempleados SET NombreEmpleado = '{$this->nombreEmpleado}',
        Edad='{$this->edad}' 
        WHERE CedulaEmpleado ='{$this->cedulaEmpleado}'";
        $this->conexion->consultaSimple($sql);
        return true;
    }

    public function eliminarEmpleado()
    {
        $sql = "DELETE FROM tblempleados WHERE CedulaEmpleado='{$this->cedulaEmpleado}'";
        $this->conexion->consultaSimple($sql);
        return true;
    }

    public function buscarEmpleadoId()
    {
        $sql = "SELECT * FROM tblempleados WHERE CedulaEmpleado='{$this->cedulaEmpleado}'";
        $tabla = $this->conexion->consultaRetorno($sql);
        $row = mysqli_fetch_assoc($tabla);
        return $row;
    }
    
    public function listaEmpleados()
    {
        $sql = "SELECT CedulaEmpleado, concat(CedulaEmpleado,' ',NombreEmpleado) AS CN FROM tblempleados";
        $tabla = $this->conexion->consultaRetorno($sql);
        return $tabla;
    }
}
?>