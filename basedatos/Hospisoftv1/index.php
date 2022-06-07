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
                    <a class="nav-link text-light" data-bs-toggle="modal" data-bs-target="#frmLoginMedico"><i class="bi bi-person-rolodex">Medico</i></a>
                </div>
            </div>
        </nav>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/hms.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Médicos Especialistas</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/hms2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Laboratorios de última tecnologia</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/hms3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-dark">
                        <h5>Atencion personalizada</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/especialista.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Médicos Especialistas</h5>
                        <p class="card-text">Ver más</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/hospitaliza.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hospitalización</h5>
                        <p class="card-text">Ver más</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/Microscopio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laboratorios</h5>
                        <p class="card-text">Ver más</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
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
                    <div class="mb-3">
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
                        <form action="app/validarIngresoPaciente.php" method="POST">
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
                                <input type="reset" class="btn btn-secondary" data-bs-dismiss="modal" value="Cancelar">
                                <input type="submit" class="btn btn-primary" value="Enviar">
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="frmLoginMedico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Acceso Médicos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="./images/loginMedico.jpg" class="rounded mx-auto d-block shadow p-1" alt="Login Doctor">
                        <form action="app/validarIngresoMedico.php" method="POST">
                            <div class="mb-3">
                                <label for="idMedico" class="form-label">Identificación</label>
                                <input type="text" class="form-control" id="idMedico" name="idMedico" aria-describedby="usuarioHelp">
                                <div id="usuarioHelp" class="form-text">Ingrese su usuario registrado en el sistema</div>
                            </div>
                            <div class="mb-3">
                                <label for="passMedico" class="form-label">Clave</label>
                                <input type="passMedico" class="form-control" id="passMedico" name="passMedico">
                            </div>
                            <div class="modal-footer">
                                <input type="reset" class="btn btn-secondary" data-bs-dismiss="modal" value="Cancelar">
                                <input type="submit" class="btn btn-primary" value="Enviar">
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Cierre modal del login-->
        <!--fin de contenedor-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>