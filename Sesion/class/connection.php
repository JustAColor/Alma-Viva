<?php

class Connection 
{  //parametros para la conexión
    private $host;
    private $user;
    private $pass;
    private $db;
    private $con;

    //creamos el constructor
    public function __construct(){
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "session_user";
        $this->con = new mysqli($this->host, $this->user, $this->pass, $this->db) 
        or die ("No se pudo conectar a la base de datos");
        $this->con->set_charset("utf8");
    }
    //metodo para realizar consultas (Insert, update y delete)
    public function simpleQuery($query){
        //try - catch
        try {
            $stm = $this->con->query($query);
        } catch (Exception $e) {
            $this->con->rollback();
            mysqli_free_result( $stm);
            mysqli_close($this->con);
        }
    }
    //metodo para realizar consultas (Select)
    public function returnQuery($query){
        try {
            $stm = $this->con->query($query);
            return $stm;
        } catch (Exception $e) {
            mysqli_free_result( $stm);
            mysqli_close($this->con);
        }
    }

}






?>