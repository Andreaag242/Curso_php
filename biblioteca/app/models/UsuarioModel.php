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
        from usuario INNER JOIN rol ON usuario.rol_idRol = rol.idRol where rol_idRol!=3");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    public function addUsuario($data){

        $valor=$this->db->query("INSERT INTO `usuario` (idUsuario , nombre1 ,nombre2,apellido1, apellido2, fechaNacimiento,  telefono, direccion, usuario, passwordUsuario, rol_idRol) 
        VALUES (:id,:nom1,:nom2,:ape1,:ape2,:fechaN,:tel,:dir,:user,:pass,:rol)");
        //bindiamos
        $valor->bindParam(':id', $data['idUsuario'],PDO::PARAM_INT);
        $valor->bindParam(':nom1', $data['nombre1Usuario'],PDO::PARAM_STR);
        $valor->bindParam(':nom2', $data['nombre2Usuario'],PDO::PARAM_STR);
        $valor->bindParam(':ape1', $data['apellido1Usuario'],PDO::PARAM_STR);
        $valor->bindParam(':ape2', $data['apellido2Usuario'],PDO::PARAM_STR);
        $valor->bindParam(':fechaN', $data['fechaNaceUsuario'],PDO::PARAM_STR);
        $valor->bindParam(':tel', $data['telefonoUsuario'],PDO::PARAM_STR);
        $valor->bindParam(':dir', $data['direccionUsuario'],PDO::PARAM_STR);
        $valor->bindParam(':user', $data['usuario'],PDO::PARAM_STR);
        $valor->bindParam(':pass', $data['passUsuario'],PDO::PARAM_STR);
        $valor->bindParam(':rol', $data['rolUsuario'],PDO::PARAM_INT);
        //verificamos la ejecucion correcta del query*/
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editUsuario($data){

        $valor=$this->db->query("UPDATE `usuario` SET idUsuario=:id , nombre1=:nom1 ,nombre2=:nom2,apellido1=:ape1, apellido2=:ape2, fechaNacimiento=:fechaN,  telefono=:tel, direccion=:dir, usuario=:user, passwordUsuario=:pass, rol_idRol=:rol");
        //bindiamos
        $valor->bindParam(':id', $data['idUsuario'],PDO::PARAM_INT);
        $valor->bindParam(':nom1', $data['nombre1Usuario'],PDO::PARAM_STR);
        $valor->bindParam(':nom2', $data['nombre2Usuario'],PDO::PARAM_STR);
        $valor->bindParam(':ape1', $data['apellido1Usuario'],PDO::PARAM_STR);
        $valor->bindParam(':ape2', $data['apellido2Usuario'],PDO::PARAM_STR);
        $valor->bindParam(':fechaN', $data['fechaNaceUsuario'],PDO::PARAM_STR);
        $valor->bindParam(':tel', $data['telefonoUsuario'],PDO::PARAM_STR);
        $valor->bindParam(':dir', $data['direccionUsuario'],PDO::PARAM_STR);
        $valor->bindParam(':user', $data['usuario'],PDO::PARAM_STR);
        $valor->bindParam(':pass', $data['passUsuario'],PDO::PARAM_STR);
        $valor->bindParam(':rol', $data['rolUsuario'],PDO::PARAM_INT);
        //verificamos la ejecucion correcta del query*/
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getOne($id)
    {
        $this->db->query("SELECT * FROM usuario where idUsuario =:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }

    public function roles(){
        $this->db->query("SELECT * from rol");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
}