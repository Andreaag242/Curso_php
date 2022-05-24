<?php
session_start();
if (!isset($_SESSION['usuarioActivo'])) {
    header('location:./index.php');
} else {
    require_once 'plantilla/cabeceraPaciente.php';
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h5 class="h2">Agendar Citas</h5>
        </div>
        <!--INICIO DEL CONTENIDO-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Agendar Cita</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="fechaCita" class="form-label">Fecha de la Cita</label>
                                    <input type="date" class="form-control" id="fechaCita" name="fechaCita">
                                </div>
                                <div class="mb-3">
                                    <label for="horaCita" class="form-label">Fecha de la Cita</label>
                                    <input type="time" class="form-control" id="horaCita" name="horaCita">
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
                </div>
                <div class="col-md-4">
                    <img src="./images/appoint-min.jpg" class="img-fluid" alt="" srcset="">
                </div>
            </div>
        </div>
        <!--FINAL DEL CONTENIDO-->
    <?php
    require_once 'plantilla/footer.php';
};
    ?>