<?php
session_start();
if(!isset($_SESSION['usuarioActivo'])){
    header('location:./index.php');
}else{
require_once 'plantilla/cabeceraPaciente.php';
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5 class="h2">Gráficas</h5>
    </div>
    <!--INICIO DEL CONTENIDO-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="./images/appoint-min.jpg" class="img-fluid" alt="" srcset="">
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis tenetur aperiam nobis temporibus repellendus, vel veritatis error amet. Optio assumenda ullam, error ea debitis ipsum iste libero! Facilis, quis a.
                Facilis minus similique ratione delectus dolor eos earum excepturi cupiditate, harum nesciunt deserunt, beatae illum, in nam obcaecati libero nostrum dicta quidem dignissimos! Repudiandae pariatur minima voluptatibus, at suscipit repellendus!
                Ea dolor nulla sed adipisci voluptatibus perferendis corporis fuga repellat deserunt sint, veniam debitis quod unde autem! Fugiat recusandae ratione incidunt similique, blanditiis distinctio culpa quam dolor quae ipsam autem.
                Quos, magni! Ad maxime nihil qui fugiat quia inventore. Aliquam soluta neque sed accusamus! Voluptatibus repellat aliquam sit ex minima odio nesciunt repudiandae, nulla quos, beatae velit repellendus labore quibusdam!
                Quis, delectus esse illo ratione qui iste alias velit corporis odit vitae iure perspiciatis cum rem. Eaque accusamus sunt voluptas, quo illo exercitationem eos explicabo autem velit omnis totam ex!</p>
            </div>
        </div>
    </div>
    <!--FINAL DEL CONTENIDO-->
    <?php
    require_once 'plantilla/footer.php';
    };
    ?>