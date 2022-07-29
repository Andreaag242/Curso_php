<?php
/*
Clase base que arma las rutas abreviadas del mvc
controlador/metodo/parametro
P.ej: medico/crearFormulaMedica/$id
*/

class Core
{
    //setear los controladores, metodos y parametros iniciales del MVC
    protected $defaultController = 'Inicio';
    protected $defaultMethod = 'index';
    protected $parameters = [];

    public function __construct()
    {
        $url = $this->getUrl();  //construye la clase y setea la url del MVC
        //1.O verificamos si existe el controlador y lo invocamos 
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->defaultController = ucwords($url[0]);  //seteamos como controlador el invocado en la url
            unset($url[0]);
        }
        // invocamos el controlador

        require_once '../app/controllers/' . $this->defaultController . '.php';
        $this->defaultController = new $this->defaultController;

        //2.O invocamos el metodo correspondiente

        if (isset($url[1])) {
            if (method_exists($this->defaultController, $url[1])) {
                $this->defaultMethod = $url[1];
                unset($url[1]);
            }
        }
        //3.0 obtenemos los parametros que pasemos por la url

        $this->parameters = $url ? array_values($url) : []; //si existen parametros los extrae del arreglos
        call_user_func_array([$this->defaultController, $this->defaultMethod], $this->parameters);  //asigna los parametros usando una funcion callback
    }




    /*
    *Toma la ruta de la url, la vuelve un arreglo 
    *y posteriormente en una ruta abreviada
    * @return $url
    */
    public function getUrl()
    {
        $url = "";  // para almacenar la ruta abreviada

        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); //separa la ruta por porciones de acuerdo al /
            $url = filter_var($url, FILTER_SANITIZE_URL); //sanitiza la ruta para asegurarse que sea url
            $url = explode('/', $url);
            return $url;
        }
        return ['Inicio'];
    }
}
