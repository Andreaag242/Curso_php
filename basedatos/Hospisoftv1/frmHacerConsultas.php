<?php
session_start();

require_once 'plantilla/cabeceraMedico.php';
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Consulta Medica</h5>
    </div>
    <!-- INICIO DEL CONTENIDO -->

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <h5 class="card-header">Datos Generales</h5>
                <div class="card-body">
                    <form action="#" method="POST" id="frmConsulta">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="fechaConsulta" class="form-label">Fecha: </label>
                                    <input type="date" class="form-control" name="fechaConsulta" id="fechaConsulta">
                                </div>
                                <div class="mb-3">

                                    <label for="nombrePaciente" class="form-label">Nombre Paciente: </label>
                                    <input type="text" class="form-control" name="nombrePaciente" id="nombrePaciente" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Médico: </label>
                                    <input type="text" class="form-control" value="<?php echo $_SESSION['idMedico'] ?>" name="medicoConsulta" id="medicoConsulta" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="fechaNacimiento" class="form-label">Fecha Nacimiento: </label>
                                    <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Identificación Paciente: </label>
                                    <input type="text" class="form-control" name="idPacienteConsulta" id="idPacienteConsulta">
                                </div>
                                <div class="mb-3">
                                    <label for="edadPaciente" class="form-label">Edad del Paciente: </label>
                                    <input type="text" class="form-control" id="edadPaciente" name="edadPaciente" readonly>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <h5 class="card-header">Precondiciones</h5>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="diabetes" name="diabetes">
                                    <label class="form-check-label" for="diabetes">
                                        Diabetes
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="colesterol" name="colesterol">
                                    <label class="form-check-label" for="colesterol">
                                        Colesterol
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="hipertension" name="hipertension">
                                    <label class="form-check-label" for="hipertension">
                                        Hipertensión
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Otra Condición: </label>
                                    <textarea class="form-control" id="otraCondicion" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <h5 class="card-header">Chequeo Básico</h5>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Presión Alta: </label>
                                    <input type="email" class="form-control" id="presionAlta" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Presión Baja: </label>
                                    <input type="email" class="form-control" id="presionBaja" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Saturación: </label>
                                    <input type="email" class="form-control" id="saturacion" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <h5 class="card-header">Informe</h5>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Reporte del Paciente: </label>
                                    <textarea class="form-control" id="reportePaciente" name="reportePaciente" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-6">
                                    <label for="exampleFormControlTextarea1" class="form-label">Diagnóstico médico: </label>
                                    <textarea class="form-control" id="diagnosticoPaciente" name="diagnosticoPaciente" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Enviar Consulta" id="btnEnviarConsulta">
        </div>
    </div>



    <!-- FIN DEL CONTENIDO -->

    <?php
    require_once 'plantilla/footer.php';

    ?>