# Configurar el Debug en VSCODE
1. Verificar versión de PHP >7.3
2. Descargar el plugin de phpdebug
3. Descargo xdebug de acuerdo a la versión, lo copio en la carpeta de php(ext) (laragon) y luego configuro en php.ini

```
zend_extension = xdebug
xdebug.mode = debug
xdebug.start_with_request = yes
```
4. En vscode configuro archivo json para el debugeador en cada proyecto, tener en cuenta seleccionar entorno php (opcion debugear de vscode) y guardar el archivo(me queda una carpeta vscode y un archivo json de configuración)
5. antes de ejecutar el codigo a debugear inicio Listen for Xdebug
6. Activo los stopwatch o breakpoint a analizar el código.
7. Cargo el código en el navegador.