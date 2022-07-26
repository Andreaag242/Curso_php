<?php



class Inicio extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $data = $this->usuarioModel->validarUsuario(); //temporal porque no hay dataa
       // return 'este es el metodo index';
       $this->renderView('Inicio',$data);

    }
}