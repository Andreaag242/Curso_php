<?php
session_start();
if (!isset($_SESSION['usuarioActivo'])) {
  header('location:./index.php');
}else{
    require_once 'plantilla/cabeceraMedico.php';
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h5>Gráficas</h5>
        </div>
        <!-- INICIO DEL CONTENIDO -->

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="./images/médicos-influencers-en-Instagram.jpg" class="img-fluid" alt="...">

                </div>
                <div class="col-md-6">
                    <h1>JADJSJHDJHAJDH</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In tenetur aliquam dignissimos neque rem impedit accusamus nesciunt doloremque optio culpa, numquam voluptatibus sunt eum dicta voluptatem. Necessitatibus officiis enim voluptatem?
                        Natus corporis praesentium accusantium, vitae ratione similique, id ea, quos iste rem at fugit reiciendis corrupti! Explicabo distinctio asperiores nostrum excepturi tempore ex, quasi dolore unde doloribus laboriosam nesciunt eos.
                        Accusamus possimus fugit enim, repudiandae dignissimos itaque ipsum quam rem veniam doloribus. Dicta quibusdam vel placeat tenetur molestiae? Optio ut perspiciatis quis aliquam excepturi in voluptates deleniti, minima sequi fugit.
                        Consectetur suscipit, ratione eaque deleniti fugit veniam iure praesentium earum sint illo officia ipsum asperiores, incidunt excepturi maiores at, vitae commodi officiis obcaecati id itaque maxime recusandae enim. Eligendi, quidem.
                        Quos quisquam odit aspernatur dolore veritatis recusandae, laborum voluptate rerum sit dolor hic in enim facere esse doloribus maiores itaque alias earum? Veritatis hic accusamus ipsum consequatur? Fugit, doloremque expedita.
                        Similique dicta nihil autem quas perspiciatis asperiores atque delectus sapiente magni, exercitationem illum aliquam maxime dolorem laboriosam. Ad eveniet repellat odit beatae. Neque dolorum, labore a quam ab beatae nobis?
                        Praesentium pariatur placeat totam, laudantium aliquam quod tenetur itaque ab doloremque! Facere assumenda cupiditate officiis modi id adipisci blanditiis inventore doloribus officia rerum dignissimos architecto nostrum, libero ratione saepe sed!
                        Doloremque eos aut sed soluta. Ipsam expedita accusantium velit illum harum aliquid non ea vero, nihil perferendis? Nostrum officiis exercitationem enim, quam necessitatibus, veritatis magnam ratione animi eligendi, esse quod!
                        Fuga sit veritatis laboriosam quisquam rerum? Unde minima, qui animi harum ut consequatur repellat distinctio labore, eaque dolor voluptatum fugiat exercitationem nisi recusandae vero earum. Recusandae veniam inventore rerum sunt?
                        Nemo nesciunt voluptates minus quam cum beatae totam amet aperiam. Rerum ut laboriosam quae officiis sunt, labore veritatis laudantium pariatur cum mollitia ipsam, sequi illum, sit dicta magni nesciunt tenetur?
                    </p>
                </div>
            </div>
        </div>



        <!-- FIN DEL CONTENIDO -->

    <?php
    require_once 'plantilla/footer.php';
}
    ?>