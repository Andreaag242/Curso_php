<?php

echo __LINE__; //Imprime la linea donde se escribio el código
echo '<br>';
echo __FILE__; //Imprime la ruta del archivo
echo '<br>';
echo __DIR__; //Imprime la ruta de la carpeta en la que esta el archivo que estoy ejecutando
echo '<br>';
echo dirname(__DIR__); // devuelve la ruta de su directorio padre

//NUMERO PI

define('NUMEROPI',3.1417); //DEFINICION DE CONSTANTES EN PHP

const NUMEROE = 2.7; 