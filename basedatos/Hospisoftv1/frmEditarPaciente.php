<?php

$id = $_GET['id'];

require_once 'app/bd.php';
$sql = 'SELECT * FROM paciente where idPaciente = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute([$id]); 
$paciente = $sentencia->fetch(PDO::FETCH_OBJ); //creo un arreglo con el resultado de la consulta
/* echo '<pre>';
var_dump($resultado);
echo '</pre>'; */
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Editar</title>
</head>

<body>


    <div class="container ">
    <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <h5 class="card-title">Editar Paciente.</h5>
                    <div class="card-body">
                        <form action="app/editarPaciente.php" method="POST">
                            <div class="mb-3">
                                <label for="id" class="form-label">Id</label>
                                <input type="text" class="form-control" name="id" id="id" value="<?php echo $paciente->idPaciente ?> " readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $paciente->nombrePaciente ?> ">
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $paciente->apellidosPaciente ?> ">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $paciente->emailPaciente ?> ">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $paciente->telefonoPaciente ?> ">
                            </div>
                            <div class="mb-3">
                                <label for="movil" class="form-label">Movil</label>
                                <input type="text" class="form-control" name="movil" id="movil" value="<?php echo $paciente->movilPaciente ?> ">
                            </div>
                           
                    </div>
                </div>
            </div>
            <div class="col-md-5">
            <div class="card">
                    <h2 class="text-center"></h2>
                    <div class="card-body">
                            <div class="mb-3">
                                <label for="fechaNace" class="form-label">Fecha Nacimiento</label>
                                <input type="date" class="form-control" name="fechaNace" id="fechaNace"  value="<?php echo $paciente->fechaNacimiento ?> ">
                            </div>
                            <div class="mb-3">
                                <label for="eps" class="form-label">E.P.S</label>
                                <input type="text" class="form-control" name="eps" id="eps" value="<?php echo $paciente->epsPaciente ?> ">
                            </div>
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario del Sistema</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $paciente->usuarioPaciente ?> ">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" id="password" value="<?php echo $paciente->passwordPaciente ?> ">
                            </div>
                            <button type="submit" class="btn btn-primary text-center"><i class="bi bi-person-plus-fill">Guardar</i></button>
                            <a href="index.php" type="cancel"  class="btn btn-secondary text-center"><i class="bi bi-x-circle">Cancelar</i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>