<?php

class Conexion
{
    //conexion con MySql
    private $host;//Nombre servidor
    private $user;//Usuario
    private $pass;//contraseña
    private $db;//base de datos
    private $con;//cadena de conexion

    //metodo constructor su funcion es ejecutar el metodo al momento de llamar la clase (Conexion)
    public function __construct(){
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "bdempleados";
        $this->con = new MySqli($this->host, $this->user, $this->pass, $this->db) or die ("No se pudo conectar".mysqli_error());
    }
    
    //Crear metodo para hacer consultas simples (Insert, Update y Delete)

    public function consultaSimple($query){

        try{
            $consulta = $this->con->query($query) || die ("Ha ocurrido un error al hacer la consulta");

        }catch(Exeption $e){
            $this->conn->rollback();//Devuelve la consulta y no se ejecuta
            mysqli_free_result($consulta);//Liberar consulta
            mysqli_close($this->con);//Cerrar conexión
        }
    }

    //crear metodo para hacer consultas con retorno de datos o tablas (select)
    public function consultaRetorno($query){
        try{
            $consulta = $this->con->query($query);
            return $consulta;
        } catch(Exeption $e){
            $consulta = $this->con->query($query);
            mysqli_free_result($consulta);
            mysqli_close($this->con);
        }
    }
}

?>