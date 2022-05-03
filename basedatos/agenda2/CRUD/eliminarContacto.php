<?php

require_once 'bd.php'; // incluyo la cadena de conexion php
//recibimos la data del formulario
$id =$_GET['id'];

//Hacer proceso de request-response

$sql = "DELETE FROM contacto WHERE id={$id}";
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute(); //ejecuta la sentencia sql

header('Location:../index.php');