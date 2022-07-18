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
       $this->renderView('Medico/MedicoInicio',$data);

    }
}