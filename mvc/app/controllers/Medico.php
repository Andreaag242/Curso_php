<?php



class Medico extends Controller
{
  private $MedicoModel;
  public function __construct()
   {
      $this->MedicoModel = $this->loadModel('MedicoModel');
  }
   public function index()
  {
    $data = $this->MedicoModel->listarMedicos(); //temporal porque no hay dataa
    // return 'este es el metodo index';
    $this->renderView('Medico',$data);
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