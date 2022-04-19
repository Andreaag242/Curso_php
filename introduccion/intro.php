<?php
// comentario de una linea
/*
comentario multilinea o bloque
etc
etc
*/
//Definicon y asignacion de variables
//Solo hasta la version 7.4
$nombreCliente = "Juan Perez"; //string
$edadCliente = 86; //entero
$double = 56.6; //double 
$activo = true; //booleano

//procesos
$total = 0;
$valor1 = 15;
$valor2 = 3;

$total1 = $valor1+$valor2;
$total2 = $valor1-$valor2;
$total3 = $valor1*$valor2;
$total4 = $valor1/$valor2;
$total5 = $valor1%$valor2; //residuo

//salidas
//echo "El nombre del cliente es: ".$nombreCliente."<br>"."Su edad es: ".$edadCliente;
echo "Numero 1: ".$valor1." y el valor 2: ".$valor2;
echo "La suma es: ".$total1;
echo "La resta es: ".$total2;
echo "La multiplicacion es: ".$total3;
echo "La division es: ".$total4;