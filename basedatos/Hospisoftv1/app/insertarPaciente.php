<?php

require_once 'bd.php'; // incluyo la cadena de conexion php
//recibimos la data del formulario
$nombre =$_POST['nombre'];
$apellidos =$_POST['apellidos'];
$email =$_POST['email'];
$especialidad =$_POST['especialidad'];


//Hacer proceso de request-response

$sql = 'INSERT INTO paciente(nombre_paciente, apellidos_paciente, email, telefono, password) values (?,?,?,?,?)';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre,$apellidos,$email,$especialidad]); //ejecuta la sentencia sql

header('Location:../medicos.php');
