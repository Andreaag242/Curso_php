<?php

class Usuario extends Controller
{
    public function __construct()
    {
        //Configuramos el modelo correspondiente a este controlador
        $this->usuarioModel =  $this->loadModel('UsuarioModel');
    }
    public function index()
    {
 
        $data = $this->usuarioModel->validarUsuario(); //
        //$data =[]; //temporal porque no hay dataa
       // return 'este es el metodo index';
       $this->renderView('Dashboard/Dashboard',$data);

    }

    public function add(){
        $data = [];
        echo "Agregamos medico";
    }

    public function delete(){
        return "Eliminando medico";
    }

    public function search(){
        return "Buscando medico";
    }  
}