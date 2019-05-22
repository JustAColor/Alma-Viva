<?php 
include_once ("Clases/Empleados.php");

class EmpleadosControlador
{
    private $empleados;

    public function __construct()
    {
        $this->empleados = new Empleados;
    }

    public function index()
    {
        $tabla = $this->empleados->listarEmpleados();
        return $tabla;
    }

    public function insertarEmpleado($cedulaEmpleado, $nombreEmpleado, $edad)
    {
        $this->empleados->__SET('cedulaEmpleado', $cedulaEmpleado); 
        $this->empleados->__SET('nombreEmpleado', $nombreEmpleado);
        $this->empleados->__SET('edad', $edad);
        $result = $this->empleados->registrarEmpleado();
        return $result;
    }

    public function buscarEmpleadoID($id)
    {
        $this->empleados->__SET('cedulaEmpleado', $id);
        $data = $this->empleados->buscarEmpleadoId();
        return $data;
    }

    public function editarEmpleado($nombreEmpleado, $edad, $id)
    {
        $this->empleados->__SET('nombreEmpleado', $nombreEmpleado);
        $this->empleados->__SET('edad', $edad);
        $this->empleados->__SET('cedulaEmpleado', $id);
        $result = $this->empleados->editarEmpleado();
        return $result;
    }

    public function eliminarEmpleado($id)
    {
        $this->empleados->__SET('cedulaEmpleado', $id);
        $result = $this->empleados->eliminarEmpleado();
        return $result;
    }

    public function listaEmpleados()
    {
        $tabla = $this->empleados->listaEmpleados();
        return $tabla;
    }
}
?>
