<?php
/**
*Clase base de Vehiculo del proyecto
*@author Andrea
*@version 1.0 junio de 2022
*@copyright softnet s.a.s
*/
require_once("persona.php");
class aprendiz extends persona{

    private int $numeroFicha;
    private string $tipoFormacion;
    public function __construct($identificacion,$nombre,$apellidos,$rol,$password,$fechaNacimiento,$direccion,$telefono,$email,$numeroFicha,$tipoFormacion)
    {
        parent::__construct($identificacion,$nombre,$apellidos,$rol,$password,$fechaNacimiento,$direccion,$telefono,$email);
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->rol = $rol;
        $this->password = $password;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->numeroFicha = $numeroFicha;
        $this->tipoFormacion = $tipoFormacion;
    }

    public function subirEvidencia(){
        return "Se ha subido la evidencia";
    }

    public function verDatosInstructor(){
        if($this->rol=="Instructor"){
            return "Su id es: ".$this->identificacion."<br>"."Su nombre: ".$this->nombre."<br>"."Sus apellidos: ".$this->apellidos."<br>"."Su rol: ".$this->rol."<br>"."Su password: ".$this->password."<br>"."Su fecha de Nacimiento: ".$this->fechaNacimiento."<br>"."Su dirección: ".$this->direccion."<br>"."Su telefono: ".$this->telefono."<br>"."Su correo: ".$this->email."<br>"."Su número de ficha: ".$this->numeroFicha."<br>"."Su tipo de formación: ".$this->tipoFormacion."<br>";
        }else{
            return "No puedo mostrarle los datos";
        }
    }
}
$datos = new aprendiz(12345,"Juan","Martinez","Instructor","12345","2003-07-06","calle 6a 12-32","3124578541", "juanm@misena.edu.co", "2248756", "cursoCorto");
echo $datos->verDatosInstructor();