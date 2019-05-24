<?php
include_once 'connection.php';
class User 
{
    private $nombre;
    private $apellido;
    private $username;
    private $email;
    private $fechaNac;
    private $pass;
    private $idUser;
    private $genero;
    private $idPais; 
    private $conn;

    public function __construct(){
        $this->conn = new Connection();
    }
    //metodo realizar la consulta si ya existe el usuario
    public function userExists($user, $pass)
    {
        $encript = md5(sha1(md5($pass)));
        $sql = "SELECT * FROM users 
        WHERE  username = '{$user}'  AND password = '{$encript}'";
        $query = $this->conn->returnQuery($sql);
        $canFilas = mysqli_num_rows($query);
        if($canFilas > 0){
            return true;
        }else{
            return false;
        }
    }
    //metodo para traer los datos del usuario
    public function setUser($user){
        $sql = "SELECT * FROM users WHERE username = '{$user}'";
        $query = $this->conn->returnQuery($sql);
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['firstname'];
            $this->apellido = $currentUser['lastname'];
            $this->username = $currentUser['username'];
            $this->email = $currentUser['email'];
            $this->idUser = $currentUser['iduser'];
        }
    }
    //metodo traer el nombre del usuario
    public function getNombreCompleto(){
        return $this->nombre. " " . $this->apellido;
    }
}

?>