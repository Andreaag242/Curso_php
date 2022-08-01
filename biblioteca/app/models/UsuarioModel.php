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
        $this->db->query("SELECT idUsuario, nombre1, nombre2, apellido1, apellido2, telefono, direccion, usuario, passwordUsuario, idRol, nombreRol
        from usuario INNER JOIN rol ON usuario.rol_idRol = rol.idRol");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    public function addUsuario($data){
        $this->db->query("INSERT INTO usuario(idUsuario, nombre1, nombre2, apellido1, apellido2, telefono, direccion, usuario, passwordUsuario, rol_idRol) VALUES (:idUsuario,:nombre1Usuario,:nombre2Usuario,:apellido1Usuario,:apellido2Usuario,:fechaNaceUsuario,:telefonoUsuario,:direccionUsuario,:usuario,:passUsuario,:rolUsuario)");
        //bindiamos
        $this->db->bind(':idUsuario', $data['idUsuario']);
        $this->db->bind(':nombre1Usuario', $data['nombre1Usuario']);
        $this->db->bind(':nombre2Usuario', $data['nombre2Usuario']);
        $this->db->bind(':apellido1Usuario', $data['apellido1Usuario']);
        $this->db->bind(':apellido2Usuario', $data['apellido2Usuario']);
        $this->db->bind(':fechaNaceUsuario', "sd", $data['fechaNaceUsuario']);
        $this->db->bind(':telefonoUsuario', $data['telefonoUsuario']);
        $this->db->bind(':direccionUsuario', $data['direccionUsuario']);
        $this->db->bind(':usuario', $data['usuario']);
        $this->db->bind(':passUsuario', $data['passUsuario']);
        $this->db->bind(':rolUsuario', $data['rolUsuario']);
        //verificamos la ejecucion correcta del query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function roles(){
        $this->db->query("SELECT * from rol");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
}