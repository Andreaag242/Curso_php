<?php



class Medico extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $data =[]; //temporal porque no hay dataa
       // return 'este es el metodo index';
       $this->getview('Medico',$data);

    }

    public function generarFormula()
    {
      echo 'este es el metodo generar formula del medico ';
    }

    public function otrometodo()
    {
      echo 'este es otro metodo del la controlador medico';
    }
}