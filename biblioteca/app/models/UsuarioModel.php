<?php
//modelo correspondiente a cada controlador
class PacienteModel{
    private $db;

    public function __construct(){
        $this->db = new Dbase;
    }
    public function validarUsuario()
    {
        $usuario = filter_var(trim($_POST['usuario']), FILTER_DEFAULT);
        $pass = filter_var(trim($_POST['password']), FILTER_DEFAULT);
        
        $this->db->query("SELECT * FROM usuario where usuario="$usuario);
        $resultSet = $this->db->getAll(PDO::FETCH_OBJ);
        echo $resultSet;

        if ($pass!= $resultSet->password) {
            //header(URLROOT.'Inicio.php');
            echo 'Adios';
        } else {
            session_start();
            $_SESSION['idUsuario'] = $resultSet->idUsuario;  //para almacenar las agendas de citas
            $_SESSION['usuarioActivo'] = $resultSet->usuario;
            //header(URLROOT.'views/Dashboard/Dashboard.php');
            echo 'Hola'.$_SESSION['usuarioActivo'];
        }
    }
}