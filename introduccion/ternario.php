<?php

/*formado por 3 elementos condicionales*/

$edad = 18;
//clasico
if($edad<=18){
    echo 'eres menor de edad';
}else{
    echo 'eres mayor de edad';
}
echo '<br>';
//operador ternario
echo $edad <=18 ? 'eres menor de edad': 'eres mayor de edad';
// ? es la bifurcación true, : es la bifurcación false
echo '<br>';
var_dump($edad<=18);