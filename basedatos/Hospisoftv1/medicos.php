<?php
require_once 'plantilla/cabecera.php';
?>
<!--INICIO DEL CONTENIDO-->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5 class="h2">Mantenimiento de médicos</h5>  
    </div>
    <div class="container-fluid">
    <div class="row ">
            <div class="col-md-6">
                <div class="card">
                    <h2 class="text-center">Registro de médicos.</h2>
                    <div class="card-body">
                        <form action="app/insertarMedico.php" method="POST">
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
                                <label for="especialidad" class="form-label">Especialidad</label>
                                <input type="text" class="form-control" name="especialidad" id="especialidad">
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
                            <th scope="col">Apellidos</th>
                            <th scope="col">Email</th>
                            <th scope="col">Especialidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'app/listarMedicos.php';
                        //templates : blade {{$listar}}
                        //javascript: fetch y json
                        //react o vuejs o angular
                        foreach ($resultado as $datos) {
                        ?>
                            <tr>
                                <td> <?php echo $datos->id_medico;  ?> </td>
                                <td> <?php echo $datos->nombre_medico;  ?> </td>
                                <td> <?php echo $datos->apellidos_medico;  ?> </td>
                                <td> <?php echo $datos->email;  ?> </td>
                                <td> <?php echo $datos->especialidad;  ?> </td>
                                <td><a href="frmEditar.php?id=<?php echo $datos->id_medico ?>" type="button" class="btn btn-info"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="frmEditar.php?id=<?php echo $datos->id_medico ?>" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i></a></td>
                                
                            </tr>

                        <?php }; ?>

                    </tbody>
                </table>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content text-white bg-info mb-3">
                            <div class="modal-header text-white bg-info mb-3">
                                <h5 class="modal-title" id="exampleModalLabel">Medicos</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="card-text">Está seguro de querer eliminar el médico: <?php echo $datos->id_medico  ?> ? </p> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <a href="app/eliminarMedico.php?id=<?php echo $datos->id_medico ?>" type="button" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
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