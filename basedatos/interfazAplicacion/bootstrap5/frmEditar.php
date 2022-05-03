<?php

$id = $_GET['id'];

require_once 'CRUD/bd.php';
$sql = 'SELECT * FROM contacto where id = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute([$id]); 
$contacto = $sentencia->fetch(PDO::FETCH_OBJ); //creo un arreglo con el resultado de la consulta
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
        <h1 class="text-center">Agenda de Contactos</h1>
        <div class="row ">
            <div class="col-md-6">
                <div class="card">
                    <h2 class="text-center">Registro de contactos.</h2>
                    <div class="card-body">
                        <form action="CRUD/editarContacto.php" method="POST">
                        <div class="mb-3">
                                <label for="id" class="form-label">Id</label>
                                <input type="text" class="form-control" name="id" id="id" value="<?php echo $contacto->id ?> " readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $contacto->nombre ?> ">
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $contacto->apellidos ?> ">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $contacto->email ?> ">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $contacto->telefono ?> ">
                            </div>
                            <div class="mb-3">
                                <label for="movil" class="form-label">Movil</label>
                                <input type="text" class="form-control" name="movil" id="movil" value="<?php echo $contacto->movil ?> ">
                            </div>
                            <button type="submit" class="btn btn-primary text-center">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>