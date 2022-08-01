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
    public function formAdd(){
        $data = $this->usuarioModel->roles();
        $this->renderView('Usuario/UsuarioForm', $data);
    }

    public function agregarUsuario(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'idUsuario' => $_POST['idUsuario'],
                'nombre1Usuario' => $_POST['nombre1Usuario'],
                'nombre2Usuario' => $_POST['nombre2Usuario'],
                'apellido1Usuario' => $_POST['apellido1Usuario'],
                'apellido2Usuario' => $_POST['apellido2Usuario'],
                'fechaNaceUsuario' => $_POST['fechaNaceUsuario'],
                'telefonoUsuario' => $_POST['telefonoUsuario'],
                'direccionUsuario' => $_POST['direccionUsuario'],
                'usuario' => $_POST['usuario'],
                'passUsuario' => $_POST['passUsuario'],
                'rolUsuario' => $_POST['rolUsuario']
            ];
            $resultado = $this->usuarioModel->addUsuario($data);
            if ($resultado) {
                $data = [
                    'mensaje' => 'insercion exitosa'
                ];
                $this->formAdd();
            } else {
                $data = [
                    'mensaje' => 'error en la insercion'
                ];
                $this->formAdd();
            }
        } else {
            echo 'Atención! los datos no fueron enviados de un formulario';
        }   
    }
       
}
