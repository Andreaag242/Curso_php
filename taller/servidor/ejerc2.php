<?php

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

if($edad>=18){
    echo "El nombre ingresado es: ".$nombre."<br>"."La edad es: ".$edad;
}else{
    echo "Eres menor de edad, no puedes usar esta APP";
};