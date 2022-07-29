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
        $data = $this->usuarioModel->verUsuarios();
        $this->renderView('Usuario/UsuarioInicio', $data);

    }
    
       
}
