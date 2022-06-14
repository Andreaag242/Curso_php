<?php
/**
*Clase base de Vehiculo del proyecto
*@author Andrea
*@version 1.0 junio de 2022
*@copyright softnet s.a.s
*/
class persona{

    private int $identificacion;
    private string $nombre;
    private string $apellidos;
    private string $rol;
    private string $password;
    private string $fechaNacimiento;
    private string $direccion;
    private string $telefono;
    private string $email;

    public function __construct($identificacion,$nombre,$apellidos,$rol,$password,$fechaNacimiento,$direccion,$telefono,$email)
    {
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->rol = $rol;
        $this->password = $password;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    public function login(){
        return "Bienvenido Usuario";
    }

    public function actualizacionDatos(){
        return "Ha actualizado sus datos correctamente. ";
    }

    public function modificarPassword(){
        return "Ha modificado su password";
    }

    public function subirArchivos(){
        return "Se han subido los archivos";
    }

    public function enviarMensajes(){
        return "Su mensaje se ha enviado correctamente";
    }
    public function consultarInformacion(){
        return "Su id es: ".$this->identificacion."<br>"."Su nombre: ".$this->nombre."<br>"."Sus apellidos: ".$this->apellidos."<br>"."Su rol: ".$this->rol."<br>"."Su password: ".$this->password."<br>"."Su fecha de Nacimiento: ".$this->fechaNacimiento."<br>"."Su dirección: ".$this->direccion."<br>"."Su telefono: ".$this->telefono."<br>"."Su correo: ".$this->email."<br>";
    }
}
 