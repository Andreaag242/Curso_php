<?php

require_once 'bd.php'; // incluyo la cadena de conexion php
//recibimos la data del formulario
$nombre =$_POST['nombre'];
$apellidos =$_POST['apellidos'];
$email =$_POST['email'];
$telefono =$_POST['telefono'];
$movil =$_POST['movil'];

//Hacer proceso de request-response

$sql = 'INSERT INTO contacto (nombre, apellidos, email, telefono, movil) values (?,?,?,?,?)';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre,$apellidos,$email,$telefono,$movil]); //ejecuta la sentencia sql

header('Location:../index.php');
