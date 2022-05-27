<?php
require_once 'bd.php';

$usuario = filter_var(trim($_POST['usuario'],FILTER_DEFAULT));
$password = filter_var(trim($_POST['password'],FILTER_DEFAULT));

/* echo '<pre>';
var_dump($usuario,$password);
echo '</pre>'; */
$sql = 'SELECT * FROM paciente where usuarioPaciente= ?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$usuario]);
$paciente = $sentencia->fetch(PDO::FETCH_OBJ); //ejecuta la sentencia sql

//validamos usuario y clave
/*TODO: VALIDACION BASADA EN EL EMAIL CON VALIDACION*/
if(!password_verify($password,$paciente->passwordPaciente)){
    header('location:../index.php');
} else {
    session_start();
    $_SESSION['idUsuario']= $paciente->idPaciente;
    $_SESSION['usuarioActivo']=$paciente->usuarioPaciente;
    header('location:../panelPaciente.php');
}