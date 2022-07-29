<?php require_once APPROOT . "/views/inc/header.php"  ?>


<div class="row mt-3">
    <div class="col-12">
        <div class="card">

            <div class="card-header bg-primary bg-gradient text-white">
                <h5>Médicos Disponibles</h5>
            </div>



            <div class="card-body">
                <a class="btn btn-success btn-sm" href="<?php echo URLROOT; ?>Medico/formAdd"><i class="bi bi-plus-circle"></i> Nuevo</a></small>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Especialidad</th>
                            <th>Acción</th>
                            <th>Acción</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $medico) :; ?>
                            <tr>
                                <td><?php echo $medico->idMedico; ?></td>
                                <td><?php echo $medico->nombreMedico; ?></td>
                                <td><?php echo $medico->apellidosMedico; ?></td>
                                <td><?php echo $medico->emailMedico; ?></td>
                                <td><?php echo $medico->especialidadMedico; ?></td>
                                <td><a class="btn btn-primary btn-sm" href="<?php echo URLROOT; ?>Medico/update/<?php echo $medico->idMedico;  ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a class="btn btn-danger btn-sm" href="<?php echo URLROOT; ?>Medico/delete/<?php echo $medico->idMedico;  ?>"><i class="bi bi-trash3"></i></a></td>



                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>







<!-- fin del contenedor principal -->
</main>


<?php require_once APPROOT . "/views/inc/footer.php"  ?>