<?php

session_start(); //activa las variables de sesion
session_destroy(); //destruye el arreglo de variables
session_unset(); //crear el arreglo de variables de sesión
header('Location:./index.php');
