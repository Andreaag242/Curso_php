<?php

$numeroAlumnos = $_POST['numeroAlumnos'];

if($numeroAlumnos>0 & $numeroAlumnos<30){
    $total = 400000/$numeroAlumnos;
    echo "El costo por persona es: ".$total." y en total $400000";
}elseif($numeroAlumnos>=30 & $numeroAlumnos<=49){
    $total = $numeroAlumnos*9500;
    echo "El costo es: ".$total;
}elseif($numeroAlumnos>=50 & $numeroAlumnos<=99){
    $total = $numeroAlumnos*7000;
    echo "El costo es: ".$total;
}elseif($numeroAlumnos>=100){
    $total = $numeroAlumnos*6500;
    echo "El costo es: ".$total;
}else{
    echo "Ingrese un valor correcto";
};