<?php require_once APPROOT . "/views/inc/header.php"  ?>


<!-- titulo seccion -->
<div class="row">

    <div class="col-md-12">
        <br>
        <div class="card">
            <div class="card-header bg-primary bg-gradient text-white">
                <h5>Borrar Información de Médico</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="<?php echo URLROOT; ?>medico/delete/<?php echo $data['idMedico']; ?>" method="POST">

                            <label for="nombreMedico" class="form-label">Nombre</label>
                            <input type="text" name="nombreMedico" id="nombreMedico" class="form-control form-control-sm" value="<?php echo $data['nombreMedico']; ?>">
                            <label for="apellidosMedico" class="form-label">Apellidos</label>
                            <input type="text" name="apellidosMedico" id="apellidosMedico" class="form-control form-control-sm" value="<?php echo $data['apellidosMedico']; ?>">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" name="direccionMedico" id="direccionMedico" class="form-control form-control-sm">
                            <label for="Telefon" class="form-label">Telefono 1</label>
                            <input type="text" name="telefonoMedico" id="nombreMedico" class="form-control form-control-sm">
                    </div>
                    <div class="col">

                        <label for="email" class="form-label">email</label>
                        <input type="email" name="emailMedico" id="emailMedico" class="form-control form-control-sm" value="<?php echo $data['emailMedico']; ?>">

                        <label for="Especialidad" class="form-label">Especialidad</label>
                        <select class="form-control form-control-sm" name="especialidadMedico" id="especialidadMedico">
                            <option value="<?php echo $data['especialidadMedico']; ?>"><?php echo $data['especialidadMedico']; ?></option>
                            <option>Medicina General</option>
                            <option>Internista</option>
                            <option>Dermatólogia</option>
                            <option>Ginecologia</option>
                        </select>


                    </div>

                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button type="reset" class="btn btn-secondary btn-sm ms-1">Cancelar</button>
                    <button type="submit" class="btn btn-danger  btn-sm ms-1"><i class="bi bi-trash"></i> Borrar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin del contenedor principal -->
</main>


<?php require_once APPROOT . "/views/inc/footer.php"  ?>;