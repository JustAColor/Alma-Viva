<?php
    include_once 'conexion.php';
    class Usuario{
        public $conn;
        private $nombre;
        private $apellido;
        private $edad;
        private $telefono;
        private $genero;
        public $username;
        private $pass;

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
                    $this->idUser = $currentUser['username'];
                    //$this->username = $currentUser['username'];
            }
            
        }
        public function usuarioVerificacion($user){
            $sql = "SELECT * FROM 
            usuario WHERE username='{$user}'";
            $query = $this->conn->returnQuery($sql);
            $canFilas = mysqli_num_rows($query);

            if($canFilas > 0){
                return true;
            }else{
                return false;
            }
        }
        public function insertarUsuario(){
            $sql = "INSERT INTO usuario (username, password, tipoUser) VALUES('{$this->username}','{$this->pass}', '0')";
            $respuesta = $this->conn->simpleQuery($sql);
            return true;
        }
        public function insertarDatosUsuario(){
            $sql = "INSERT INTO infouser (username, nombre, apellido, telefono, edad, genero) VALUES('{$this->username}','{$this->nombre}', '{$this->apellido}', '{$this->telefono}', '{$this->edad}', '{$this->genero}')";
            $respuesta = $this->conn->simpleQuery($sql);
            return true;
        }
        //verificar si el user existe-> Registro de user -> registrar nombre etc where username=username
        /*public function insertarUsuario(){
            $sql = "SELECT * FROM usuario WHERE username = '{$username}'"
            $respuesta = $this->conn->simpleQuery($sql);
            $canFilas = mysqli_num_rows($query);

            if($canFilas > 0){
                return true;
            }else{
                return false;
            }

            $sql = "INSERT INTO usuario (username, password, tipoUser) VALUES('{$this->username}','{$this->pass}', '0')"
            $respuesta = $this->conn->simpleQuery($sql);
            return true;
            
        }*/

    }
?>