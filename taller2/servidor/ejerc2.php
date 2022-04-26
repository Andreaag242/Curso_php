<?php

$numeroPersonas = $_POST['numeroPersonas'];

if($numeroPersonas>0 & $numeroPersonas<=200){
    $total = $numeroPersonas*14000;
    echo "La cuenta es: ".$total;
}elseif($numeroPersonas>200 & $numeroPersonas<=300){
    $total = $numeroPersonas*11000;
    echo "La cuenta es: ".$total;
}elseif($numeroPersonas>300){
    $total = $numeroPersonas*9000;
    echo "La cuenta es: ".$total;
}else{
    echo "Ingrese un valor correcto";
};