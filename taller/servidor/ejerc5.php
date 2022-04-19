<?php

$numero = $_POST['numero'];

if($numero<0){
    echo $numero." tiene raíz imaginaria.";
}else{
    echo "Su raíz cuadrada es: ".sqrt($numero);
};