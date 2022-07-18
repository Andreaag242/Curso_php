<?php

class Paciente extends Controller
{
    public function __construct()
    {
        //Configuramos el modelo correspondiente a este controlador
        $this->pacienteModel =  $this->loadModel('PacienteModel');
    }
    public function index()
    {
        $data = $this->pacienteModel->listar(); //
        //$data =[]; //temporal porque no hay dataa
       // return 'este es el metodo index';
       $this->renderView('Paciente/PacienteInicio',$data);

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