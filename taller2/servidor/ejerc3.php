<?php

$kilos = $_POST['kilos'];
$tipo = $_POST['tipo'];
$tamano = $_POST['tamano'];

if($tipo=='A' & $tamano==1){
    $valor = 2000+2000;
    $total = $kilos*$valor;
    echo "El valor a pagar es: ".$total;
}elseif($tipo=='A' & $tamano==2){
    $valor = 2000+1000;
    $total = $kilos*$valor;
    echo "El valor a pagar es: ".$total;
}elseif($tipo=='B' & $tamano==1){
    $valor = 2000-500;
    $total = $kilos*$valor;
    echo "El valor a pagar es: ".$total;
}elseif($tipo=='B' & $tamano==2){
    $valor = 2000-900;
    $total = $kilos*$valor;
    echo "El valor a pagar es: ".$total;
}else{
    echo "Ingrese un valor correcto";
};