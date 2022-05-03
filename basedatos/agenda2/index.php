<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Hello, world!</title>
</head>

<body>


    <div class="container ">
        <h1 class="text-center">Agenda de Contactos</h1>
        <div class="row ">
            <div class="col-md-6">
                <div class="card">
                    <h2 class="text-center">Registro de contactos.</h2>
                    <div class="card-body">
                        <form action="CRUD/insertarContacto.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono">
                            </div>
                            <div class="mb-3">
                                <label for="movil" class="form-label">Movil</label>
                                <input type="text" class="form-control" name="movil" id="movil">
                            </div>
                            <button type="submit" class="btn btn-primary text-center"><i class="bi bi-person-plus-fill"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Movil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'crud/listarContactos.php';
                        //templates : blade {{$listar}}
                        //javascript: fetch y json
                        //react o vuejs o angular
                        foreach ($resultado as $datos) {
                        ?>
                            <tr>
                                <td> <?php echo $datos->id  ?> </td>
                                <td> <?php echo $datos->nombre  ?> </td>
                                <td> <?php echo $datos->apellidos  ?> </td>
                                <td> <?php echo $datos->movil  ?> </td>
                                <td><a href="frmEditar.php?id=<?php echo $datos->id ?>" type="button" class="btn btn-info"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="frmEditar.php?id=<?php echo $datos->id ?>" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i></a></td>
                                
                            </tr>

                        <?php }; ?>

                    </tbody>
                </table>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content text-white bg-info mb-3">
                            <div class="modal-header text-white bg-info mb-3">
                                <h5 class="modal-title" id="exampleModalLabel">Contactos</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="card-text">Está seguro de querer eliminar el usuario: <?php echo $datos->id  ?> ? </p> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <a href="CRUD/eliminarContacto.php?id=<?php echo $datos->id ?>" type="button" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                            </div>
                        </div>
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