<?php

require_once 'bd.php'; // incluyo la cadena de conexion php
//recibimos la data del formulario
$nombre =$_POST['nombre'];
$apellidos =$_POST['apellidos'];
$email =$_POST['email'];
$especialidad =$_POST['especialidad'];
$id =$_POST['id'];

//Hacer proceso de request-response

$sql = 'UPDATE medico SET nombre_medico=?, apellidos_medico=?, email=?, especialidad=? WHERE id_medico=?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$nombre,$apellidos,$email,$especialidad,$id]); //ejecuta la sentencia sql

header('Location:../medicos.php');