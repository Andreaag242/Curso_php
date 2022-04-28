#Proyecto Agenda

La base de datos se llama : agenda
y la tabla se lama : contactos

contacto
id autoincrementable int
nombre varchar(200)
apellidos varchar(250)
email varchar(200)
telefono varchar(100)
movil varchar(100)
activo booleano // para listar los contactos activos

OJO: el boolean se transforma en tinyint(1) integer de una sola posicion
donde 1 es true y 0 es false.

## conexion a la base de datos

PHP tiene varias clases prederminadas para manejar conexiones con bases de datos 
Clase 1 : mysqli() //solo sirve para bases de datos mysql
Clase 2 : PDO() // universal y traduce php data objects

## REQUIRE, INCLUDE, REQUIRE_ONCE, INCLUDE_ONCE

Todos incluyen un archivo externo, la diferencia esta en el manejo de errores.

Si hay un error grave INCLUDE rompe o aborta la carga normal del programa
el REQUIRE genera el error pero permite la carga del aplicativo.

## patron de diseño front_controller
En el diseño del aplicativo tengo una sola "puerta de entrada" a las funcionalidades.
