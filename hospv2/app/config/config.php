<?php
/*
Configuracion general del framework
Constantes
*/

//DIRECTORIO RAIZ O PADRE  DEL FRAMEWORK
define('APPROOT', dirname(dirname(__FILE__)));
//echo APPROOT;

// URL DE LA APP
// define('URLROOT', 'http://www.eldominio.com/')
define('URLROOT', 'http://localhost:8000/Curso_php/hospv2/');
//NOMBRE DE LA APLICACION
define('SITENAME', 'Aplicación Hospital Version MVC');

//CREDENCIALES PARA LA BD
//FIXME: Cambiar a la forma nueva de hacer constantes  const=
define('DB_HOST', 'localhost');  //ojo: cambiarla en el deploy
define('DB_USER', 'root');    //USUARIO DE LA BD
define('DB_PASSWORD', '');    //PASSWORD DEL USUARIO DE LA BD
define('DB_NAME', 'hospisoft');  //NOMBRE DE LA BD 
