<?php

//conexion ala base de datos de la forma tradicional

//usuario y clave de mysql
$usuario = 'root';
$password = '';

try{
    //creamos el conector instanciando la clase PDO
    $pdo = new PDO('mysql:host=localhost;dbname=agenda',$usuario,$password); //usamos la clase PDO de php con el conector mysql
   /*  var_dump($pdo);
    echo '<br>';
    echo 'conexion exitosa';
 */
}catch(PDOException $error){
    echo 'ha ocurrido un error en la conexión'; //mensaje de error para usuario normal
    //echo 'el error es: '.$error->getMessage(); //mensaje de error programador
}