<?php

require_once 'bd.php'; // incluyo la cadena de conexion php

//Hacer proceso de request-response

$sql = 'SELECT * FROM contacto';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute(); //ejecuta la sentencia sql
$resultado = $sentencia->fetchAll(); //almacena el resultado de la consulta en un array
/* echo '<pre>';
var_dump($resultado); 
echo '<pre>';  */

