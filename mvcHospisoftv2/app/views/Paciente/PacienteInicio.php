<?php require_once APPROOT."/views/inc/header.php" ;?>

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <h1>Paciente</h1>
        </div>
        <div class="col-8">
            <?php 
            print_r($data);
            ?>
            acá va la tabla
        </div>
    </div>
</div>

<?php require_once APPROOT."/views/inc/footer.php" ;?>