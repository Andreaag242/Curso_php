## HOSPISOFT V1

El favicon se puede descargar cualquier icono en formato .ico
-Favicon generator
-Free icons
-https://realfavicongenerator.net/

# AVANCE MAYO 14 2022
1. ORGANIZAR EL MENÚ DEL PANEL CON USUARIO ACTIVO
2. IMPLEMENTAR EL SISTEMA DE MENSAJES DE LA APLICACIÓN (VARIABLES DE SESIÓN)
3. REGISTRO Y ENCRIPTACIÓN DEL PACIENTE (ALGORITMOS DE HASHING)- Validación de datos del lado del servidor
4. LOGIN DEL PACIENTE
5. PROTECCIÓN DEL DIRECTORIO DE LA APLICACIÓN 
6. HISTORIAS DE USUARIO (TERRITORIUM)-- SCRUM

ZONA HORARIA

# Validación PHP

trim() //limpia espacios en blanco al inicio y al final
filter_var() con los filtros
https://www.php.net/manual/es/filter.filters.validate.php

# Algoritmos de encriptación ... bcrypt

password_hash()

# tipos de errores

https://manuales.guebs.com/php/errorfunc.constants.html

NOTICE = Advertencia de posible error
WARNING = Error no tan grave, no rompe la ejecución del script
ERROR = Fatales, paran el script (tumban el sistema)

# variables de sesión

Debido a que el protocolo http es sin estado (stateless), no guarda las variables entre diferentes programas.
es necesario crear variables de sesión; estas se crean como un arreglo dentro del navegador, para poderlas usar mientras el uso del navegador este activo(sesión).
Las defino en PHP con session_start() ... $_SESSION['nombreVariable] le puede asignar valores

# archivos HTACCESS

Me sirve para configurar el servidor web (APACHE), Ojo: existe otro servidor y es el NGINX (Este corre en linux) = dicen que es más rápido

# git y github

recordar revisar siempre las credenciales del github 

# segundo sprint 24/05

Libreria de reportes en PDF FPDF
Registro de citas (llaves compuestas)
Imprimir Cita
Listar la historia clinica por cada paciente
Listar médicos por especilidad
Actualizar perfil 