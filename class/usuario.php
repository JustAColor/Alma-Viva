<?php
    include_once 'conexion.php';
    class Usuario{
        private $conn;
        private $nombre;
        private $apellido;
        private $edad;
        private $iduser;
        private $genero;
        private $username;
        private $pass;
        private $idPais;

        public function __construct(){
            $this->conn = new Conexion();
        }

        //traer los datos del usuario 
        public function userExist($user,$pass){
            $codeUser = htmlentities($user);
            $codePass = htmlentities($pass);
            $codeUserphp = mysqli_real_escape_string($this->conn->con, $codeUser);
            $codePassphp = mysqli_real_escape_string($this->conn->con, $codePass);
            $encript = md5(sha1(md5($codePassphp)));
            $sql = "SELECT * FROM 
            usuario WHERE username='{$codeUserphp}' AND password='{$encript}'";
            $query = $this->conn->returnQuery($sql);
            $canFilas = mysqli_num_rows($query);

            if($canFilas > 0){
                return true;
            }else{
                return false;
            }
        }
 
            public function setUser($user){
                $sql ="SELECT * FROM usuario WHERE username = '{$user}'";
                $query = $this->conn->returnQuery($sql);
                foreach ($query as $currentUser) {
                    //$this->nombre = $currentUser['Nombre']; 
                    //$this->apellido = $currentUser['Apellido'];
                    //$this->idUser = $currentUser['iduser'];
                    //$this->username = $currentUser['username'];
            }
        }

    }
?>