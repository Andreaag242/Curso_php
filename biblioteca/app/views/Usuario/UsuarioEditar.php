<?php require_once APPROOT . "/views/inc/header.php"; ?>
<div class="container-fluid py-4">
    <div class="row">
    </div>
    <div class="row">


        <div class="col-12">

            <div class="card z-index-0">
                <div class="card-header text-center pt-4">
                    <h5>Usuario</h5>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="col p-3 ps-5">
                            <form role="form">
                                <input type="text" class="form-control w-50" placeholder="Identificación">
                                <br>
                                <input type="text" class="form-control w-75" placeholder="Primer Nombre">
                                <br>
                                <input type="text" class="form-control w-75" placeholder="Segundo Nombre">
                                <br>
                                <input type="text" class="form-control w-75" placeholder="Primer Apellido">
                                <br>
                                <input type="text" class="form-control w-75" placeholder="Segundo Apellido">
                                <br>
                                <h6>Fecha de Nacimiento</h6>
                                <input type="date" class="form-control w-75">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col p-3">
                            <input type="text" class="form-control" placeholder="Télefono">
                            <br>
                            <input type="text" class="form-control" placeholder="Dirección">
                            <br>
                            <input type="text" class="form-control" placeholder="Usuario">
                            <br>
                            <input type="password" class="form-control" placeholder="Contraseña">
                            <br>
                            <select class="form-select">
                                <option selected>Rol</option>
                                <option value="1">One</option>  
                            </select>
                        </div>

                    </div>
                    <div class="col-12 d-flex justify-content-center ">
                        <div class="text-center">
                        <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">Enviar</button>
                    </div>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . "/views/inc/footer.php"; ?>