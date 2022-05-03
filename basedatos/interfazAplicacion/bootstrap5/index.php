<?php
require_once 'plantilla/cabecera.php';
?>
<!--INICIO DEL CONTENIDO-->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Crud de Contactos</h1>  
    </div>
    <div class="container-fluid">
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
<!--FINAL DEL CONTENIDO-->
<?php
    require_once 'plantilla/footer.php';
?>