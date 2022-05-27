<?php
session_start();
require_once 'bd.php'; // incluyo la cadena de conexion php
//recibimos la data del formulario y validamos
$fechaCita = filter_var($_POST['fecha'],FILTER_DEFAULT);
$horaCita = filter_var($_POST['hora'],FILTER_DEFAULT);
$idMedico = filter_var($_POST['medico'],FILTER_DEFAULT);
$motivoCita = filter_var(trim($_POST['motivo'],FILTER_DEFAULT));
/*$idPaciente = $_POST['pacientes'];*/
$idPaciente = filter_var($_POST['pacientes'],FILTER_DEFAULT); 



//Hacer proceso de request-response

$sql = 'INSERT INTO agenda(fechaCita, horaCita, idMedico, motivoCita, idPaciente) values (?,?,?,?,?)';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$fechaCita,$horaCita,$idMedico,$motivoCita,$idPaciente]); //ejecuta la sentencia sql


//variable de sesion
if($sentencia->rowCount()>0){
    $_SESSION['tipo'] = 'success';
    $_SESSION['mensaje'] = 'Se agendo su cita correctamente!';
}else{
    $_SESSION['tipo'] = 'danger';
    $_SESSION['mensaje'] = 'El doctor está ocupado, no se puede agendar!';
}

header('Location:../frmAgendarMedico.php');