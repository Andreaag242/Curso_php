<?php
require_once 'BD.php';
$usuario = filter_var(trim($_POST['idMedico']), FILTER_SANITIZE_NUMBER_INT);
$password = filter_var(trim($_POST['passMedico']), FILTER_DEFAULT);
/*
echo '<pre>';
var_dump($usuario, $password);
echo '</pre>';
 */

$sql = 'SELECT * FROM medico where id_medico = ?';
$sentencia = $pdo->prepare($sql);  //prepara consulta 
$sentencia->execute([$usuario]); //ejecuta la sentencia sql
$medicos = $sentencia->fetch(PDO::FETCH_OBJ);

//VALIDAMOS USUARIO Y CLAVE
/* VALIDACION BASADA EN EL EMAIL CON VALIDACION*/
if ($password!= $medicos->passMedico) {
    header('Location:../index.php');
    //echo 'Adios';
} else {
    session_start();
    $_SESSION['idUsuario'] = $medicos->id_medico;  //para almacenar las agendas de citas
    $_SESSION['usuarioActivo'] = $medicos->nombre_medico;
    header('Location:../panelMedico.php');
    //echo 'Hola'.$_SESSION['usuarioActivo'];
}