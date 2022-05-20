<?php
session_start();
require_once 'bd.php'; // incluyo la cadena de conexion php
//recibimos la data del formulario
$nombre = filter_var(trim($_POST['nombre'],FILTER_DEFAULT));
$apellidos = filter_var(trim($_POST['apellidos'],FILTER_DEFAULT));
$email = filter_var(trim($_POST['email'],FILTER_VALIDATE_EMAIL));
$telefono = filter_var(trim($_POST['telefono'],FILTER_DEFAULT));
$movil = filter_var(trim($_POST['movil'],FILTER_DEFAULT));
$fechaNace = filter_var(trim($_POST['fechaNace'],FILTER_DEFAULT));
$eps = filter_var(trim($_POST['eps'],FILTER_DEFAULT));
$usuario = filter_var(trim($_POST['usuario'],FILTER_DEFAULT));
$password = filter_var(trim($_POST['password'],FILTER_DEFAULT));

//encriptación de la password
$password = password_hash($password, PASSWORD_DEFAULT);
//Hacer proceso de request-response

$sql = 'INSERT INTO paciente(nombrePaciente, apellidosPaciente, emailPaciente, telefonoPaciente, movilPaciente, fechaNacimiento, epsPaciente, usuarioPaciente, passwordPaciente) values (?,?,?,?,?,?,?,?,?)';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre,$apellidos,$email,$telefono,$movil,$fechaNace,$eps,$usuario,$password]); //ejecuta la sentencia sql

//var_dump($sentencia->rowCount());
//variable de sesion
if($sentencia->rowCount()>0){
    $_SESSION['tipo'] = 'success';
    $_SESSION['mensaje'] = 'Operación exitosa!';
}else{
    $_SESSION['tipo'] = 'danger';
    $_SESSION['mensaje'] = 'Error en la inserción!';
}

header('Location:../frmRegistroPaciente.php');
