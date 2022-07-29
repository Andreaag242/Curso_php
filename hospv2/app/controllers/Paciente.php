<?php


class Paciente extends Controller
{

    public function __construct()
    {
        //configuramos el modelo correspondiente a este controlador
        $this->pacienteModel = $this->getModel('PacienteModel');
    }
    public function index()
    {
        $data = $this->pacienteModel->listar();
        //$data = [];
        $this->renderView('Paciente/PacienteInicio', $data);
    }

    public function add()
    {
        $data = [];
        echo "agregando medico";
    }

    public function delete()
    {
        echo "borrando medico";
    }

    public function search()
    {
        echo "buscando medico";
    }
}
