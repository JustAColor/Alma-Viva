<?php 
include_once ("Clases/Pagos.php");

class PagosControlador
{
    private $pagos;

    public function __construct()
    {
        $this->pagos = new Pagos;
    }

    public function index()
    {
        $tabla = $this->pagos->listarPago();
        return $tabla;
    }

    public function insertarPago($cedulaEmpleado, $horas, $valorHora)
    {
        $totalPago = $horas * $valorHora;
        $this->pagos->__SET('cedulaEmpleado', $cedulaEmpleado);
        $this->pagos->__SET('horas', $horas);
        $this->pagos->__SET('valorHora', $valorHora);
        $this->pagos->__SET('totalPago', $totalPago);;
        $result = $this->pagos->registrarPago();
        return $result;
    }

    public function buscarPagoID($id)
    {
        $this->pagos->__SET('idPago', $id);
        $data = $this->pagos->buscarPagoId();
        return $data;
    }

    public function eliminarPago($id)
    {
        $this->pagos->__SET('idPago', $id);
        $result = $this->pagos->eliminarPago();
        return $result;
    }
}
?>
