<?php



class Dashboard extends Controller
{
    public function __construct()
    {
        //Configuramos el modelo correspondiente a este controlador
        $this->dashboardModel =  $this->loadModel('DashboardModel');
    }
    public function index()
    {
        //$data = $this->dashboardModel->listar(); //
        $data =[]; //temporal porque no hay dataa
       // return 'este es el metodo index';
       $this->renderView('Dashboard/Dashboard',$data);

    }

    /* public function formAdd(){
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
    }   */
}