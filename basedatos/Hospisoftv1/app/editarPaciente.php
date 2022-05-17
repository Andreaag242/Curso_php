<?php

require_once 'bd.php'; // incluyo la cadena de conexion php
//recibimos la data del formulario
$id = filter_var(trim($_POST['id'],FILTER_DEFAULT));
$nombre = filter_var(trim($_POST['nombre'],FILTER_DEFAULT));
$apellidos = filter_var(trim($_POST['apellidos'],FILTER_DEFAULT));
$email = filter_var(trim($_POST['email'],FILTER_VALIDATE_EMAIL));
$telefono = filter_var(trim($_POST['telefono'],FILTER_DEFAULT));
$movil = filter_var(trim($_POST['movil'],FILTER_DEFAULT));
$fechaNace = filter_var(trim($_POST['fechaNace'],FILTER_DEFAULT));
$eps = filter_var(trim($_POST['eps'],FILTER_DEFAULT));
$usuario = filter_var(trim($_POST['usuario'],FILTER_DEFAULT));
$password = filter_var(trim($_POST['password'],FILTER_DEFAULT));
//Hacer proceso de request-response

$sql = 'UPDATE paciente SET nombrePaciente=?, apellidosPaciente=?, emailPaciente=?, telefonoPaciente=?, movilPaciente=?, fechaNacimiento=?, epsPaciente=?, usuarioPaciente=?, passwordPaciente=? WHERE idPaciente=?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute($nombre,$apellidos,$email,$telefono,$movil,$fechaNace,$eps,$usuario,$password,$id); //ejecuta la sentencia sql

header('Location:../medicos.php');