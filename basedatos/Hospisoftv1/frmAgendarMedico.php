<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['usuarioActivo'])) {
    header('location:./index.php');
} else {
    require_once 'plantilla/cabeceraPaciente.php';
    require_once 'app/listarMedicos.php';

    //var_dump($medico);
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h5 class="h2">Agendar Citas</h5>
        </div>
        <!--INICIO DEL CONTENIDO-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['mensaje'];
                     ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Agendar Cita</h5>
                            <form action="app/insertarCita.php" method="POST">
                                <div class="mb-3">
                                    <label for="fecha" class="form-label">Fecha de la Cita</label>
                                    <input type="date" class="form-control" id ="fecha" name="fecha" >
                                </div>
                                <div class="mb-3">
                                    <label for="horac">Hora de la Cita</label>
                                    <select name="hora" id="hora">
                                        <option value="0800">8:00 AM</option>
                                        <option value="0900">9:00 AM</option>
                                        <option value="1000">10:00 AM</option>
                                        <option value="1100">11:00 AM</option>
                                        <option value="1300">1:00 AM</option>
                                        <option value="1400">2:00 AM</option>
                                        <option value="1500">3:00 AM</option>
                                        <option value="1600">4:00 AM</option>
                                        <option value="1700">5:00 AM</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="medico">Médico</label>
                                    <select name="medico" id="medico">
                                        <?php foreach($medico as $medicos) : ?>
                                            <option value="<?php echo $medicos->idMedico; ?>">
                                            <?php echo $medicos->nombreMedico . ' ' . $medicos->apellidosMedico . '-' . $medicos->especialidadMedico; ?>
                                        </option>
                                        
                                        <?php endforeach;  ?>

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="motivo">Motivo de la consulta</label><br>
                                    <textarea name="motivo" id="motivo" cols="50" rows="10"></textarea>
                                </div>
                                
                                    <input type="text" name="pacientes" id="paciente" readonly value="<?php echo $_SESSION['idUsuario']; ?>">
                                
                                <button type="submit" class="btn btn-primary">Crear Citas</button>
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