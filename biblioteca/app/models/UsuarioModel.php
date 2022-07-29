<?php
//modelo correspondiente a cada controlador
class UsuarioModel{
    private $db;

    public function __construct(){
        $this->db = new Dbase;
    }
    public function validarUsuario()
    {
        $usuario = $_POST['usuario'];
        $pass = $_POST['pass'];
        
        $this->db->query("SELECT * FROM usuario where usuario='$usuario' AND passwordUsuario='$pass'");
        //$resultSet = $this->db->getAll(PDO::FETCH_OBJ);
        $cantidad = $this->db->rowCount();

        if($cantidad>0){
            $resultSet = $this->db->getOne();
            return $resultSet;
        }
        else{
            return "Vacio";
        }

        /* if ($pass!= $resultSet->password) {
            header(URLROOT.'Inicio.php');
            echo 'Adios';
        } else {
            session_start();
            $_SESSION['idUsuario'] = $resultSet->idUsuario;  //para almacenar las agendas de citas
            $_SESSION['usuarioActivo'] = $resultSet->usuario;
            header(URLROOT.'views/Dashboard/Dashboard.php');
            echo 'Hola'.$_SESSION['usuarioActivo'];
        } */
    }
    public function verUsuarios()
    {
        $this->db->query("SELECT * FROM usuario");
        $resultSet = $this->db->getAll();
        return $resultSet;

        

    }
}