<?php

$estrato = $_POST['estrato'];
$metrosCubicos = $_POST['metrosCubicos'];

switch ($estrato){
    case '1':
        $totalpagar = 5000*$metrosCubicos;
        echo 'El valor a pagar es: '.$totalpagar;
        break;
    case '2':
        $totalpagar = 6500*$metrosCubicos;
        echo 'El valor a pagar es: '.$totalpagar;
        break;
    case '3':
        $totalpagar = 7000*$metrosCubicos;
        echo 'El valor a pagar es: '.$totalpagar;
        break;
    case '4':
        $totalpagar = 8000*$metrosCubicos;
        echo 'El valor a pagar es: '.$totalpagar;
        break;
    case '5':
        $totalpagar = 9200*$metrosCubicos;
        echo 'El valor a pagar es: '.$totalpagar;
        break;
    default:
        echo 'Debe elegir un estrato entre 1 y 5';
        break;
    }