<?php

require_once 'bd.php'; // incluyo la cadena de conexion php
//recibimos la data del formulario
$nombre =$_POST['nombre'];
$apellidos =$_POST['apellidos'];
$email =$_POST['email'];
$telefono =$_POST['telefono'];
$movil =$_POST['movil'];
$id =$_POST['id'];

//Hacer proceso de request-response

$sql = 'UPDATE contacto SET nombre=?, apellidos=?, email=?, telefono=?, movil=? WHERE id=?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre,$apellidos,$email,$telefono,$movil,$id]); //ejecuta la sentencia sql

header('Location:../index.php');