<?php
    class Conexion
    {
        private $host;
        private $user;
        private $pass;
        private $db;
        public $con;

        //metodo constructor 
        public function __construct(){
            $this->host = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->db = "almaviva"; 
            $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db) or die ("No se puedo conectar");
        }

        public function returnQuery($query){
            try {
                $stm = $this->con->query($query);
                return $stm;
            } catch (Exception $e) {
                mysqli_free_result( $stm);
                mysqli_close($this->con);
            }
        }

        function formatearFecha($fecha){
            return date('g:i a', strtotime($fecha));
        }

    }
?>