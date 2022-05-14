<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/nurse.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>C.M. Lourdes</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8"><img src="images/LOGO.png" class="img-fluid" alt="...">
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-2">
                Email: ClinicaLourdes@gmail.com<br>
                Citas Médicas: 55555845784
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-heart-fill">Inicio</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-info">Acerca de</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-journal-plus">Citas</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-people-fill">Contactos</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#frmLogin">
                                <i class="bi bi-key-fill">Login</i>
                            </a>
                            <!--<a class="nav-link" href="panel.php"></a>-->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <h5 class="card-title">Registro de Paciente.</h5>
                    <div class="card-body">
                        <form action="app/insertarPaciente.php" method="POST">
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
                           
                    </div>
                </div>
            </div>
            <div class="col-md-5">
            <div class="card">
                    <h2 class="text-center"></h2>
                    <div class="card-body">
                            <div class="mb-3">
                                <label for="fecha_nace" class="form-label">Fecha Nacimiento</label>
                                <input type="date" class="form-control" name="fecha_nace" id="fecha_nace">
                            </div>
                            <div class="mb-3">
                                <label for="eps" class="form-label">E.P.S</label>
                                <input type="text" class="form-control" name="eps" id="eps">
                            </div>
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario del Sistema</label>
                                <input type="text" class="form-control" name="usuario" id="usuario">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" id="password">
                            </div>
                            <button type="submit" class="btn btn-primary text-center"><i class="bi bi-person-plus-fill">Guardar</i></button>
                            <a href="index.php" type="cancel"  class="btn btn-secondary text-center"><i class="bi bi-x-circle">Cancelar</i></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">Publicidad</div>
        </div>
        <div class="row mt-5 p-5 bg-dark text-light">
            <div class="col-md-6">
                <i class="bi bi-hospital-fill"></i> <br>
                Cra 100 con 98<br>
                Edificio la Ceiba<br>
                Cali-Valle
            </div>
            <div class="col-md-6">
                <form>
                    <div class="mt-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!--Modal del login-->
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="frmLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login del sistema</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuarioHelp">
                            <div id="usuarioHelp" class="form-text">Ingrese su usuario registrado en el sistema</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        ¿Aún no tiene cuenta? <a href="frmRegistroPaciente.php">Registrese Aquí</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Cierre modal del login-->
        <!--fin de contenedor-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>