<?php

$a = 10;
$b = "10";

#var_dump($a>$b); //analizador
$frutas =["banano", 9, true, 3.64, "manzana","pera"];
#echo '<pre>';
#var_dump($frutas);
//Impresion Arreglos
#print_r($frutas); //Especificamente para arreglos
#echo '<hr>';
#var_dump($frutas);
#var_dump($a==$b); //compara los valores pero no los tipos de datos
#var_dump($a===$b); //compara valores y tipos 
#echo '<pre>';

//Asociativo
$equipos = [
    "n1"=>"Deportivo Cali",
    "N2" =>89,
    "c4"=>8.67,
    "estado"=>true
];
echo '<br>';
echo '<pre>'; //dar formato
var_dump($equipos);
echo '</pre>';

//posición especifica
echo '<br>';
echo $equipos["c4"];
echo '<hr>';
echo '<br>';
echo $frutas[3]."-".$equipos["c4"].'<br>';

foreach($equipos as $equipo){
    echo $equipo.'<br>';
}