<?php



class Medico extends Controller
{
    public function __construct()
    {
        //Configuramos el modelo correspondiente a este controlador
        $this->medicoModel =  $this->loadModel('MedicoModel');
    }
    public function index()
    {
        $data = $this->medicoModel->listar(); //
        //$data =[]; //temporal porque no hay dataa
       // return 'este es el metodo index';
       $this->renderView('Medico/MedicoInicio',$data);

    }

    public function formAdd(){
        $data = [];
        $this->renderView('Medico/MedicoAgregar', $data);
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