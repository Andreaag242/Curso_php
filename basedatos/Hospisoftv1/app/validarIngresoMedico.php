<?php
require_once 'bd.php';
$idMedico = filter_var(trim($_POST['idMedico'],FILTER_SANITIZE_NUMBER_INT));
$passMedico = filter_var(trim($_POST['passMedico'],FILTER_DEFAULT));

/* echo '<pre>';
var_dump($usuario,$password);
echo '</pre>'; */
$sql = 'SELECT * FROM medico where idMedico= ?';
$sentencia = $pdo->prepare($sql); //prepara consulta
$sentencia->execute([$idMedico]);
$medico = $sentencia->fetch(PDO::FETCH_OBJ); //ejecuta la sentencia sql

//validamos usuario y clave
/*TODO: VALIDACION BASADA EN EL EMAIL CON VALIDACION*/
if(!password_verify($passMedico,$medico->passMedico)){
    header('location:../index.php');
} else {
    session_start();
    $_SESSION['idMedico']= $medico->idMedico;
    $_SESSION['usuarioActivo']=$medico->nombreMedico.' '.$medico->apellidosMedico;
    header('location:../panelMedico.php');
}