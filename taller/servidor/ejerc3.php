<?php

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];

if($edad>=18 & $sexo==1){
    echo "El nombre ingresado es: ".$nombre."<br>"."La edad es: ".$edad."<br>"."El sexo es: M-".$sexo;
}