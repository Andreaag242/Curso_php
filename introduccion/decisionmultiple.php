<?php

$opcion = 1;

switch ($opcion){
    case '1':
        echo 'Ordenaste Pizza';
        break;
    case '2':
        echo 'Ordenaste Perro Caliente';
        break;
    case '3':
        echo 'Ordenaste Hamburguesa';
        break;
    case '4':
        echo 'Ordenaste Desgranado';
        break;
    case '5':
        echo 'Ordenaste Ensalada';
        break;
    default:
        echo 'Debe elegir una opción VALIDA del menú!';
        break;
}