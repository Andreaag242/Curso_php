<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Panel de Control HOSPISOFT</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="<?php echo URLROOT; ?>img/logo.png">
    <!-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" ></script> -->
    <link href="<?php echo URLROOT; ?>css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark bg-secondary bg-gradient sticky-top   flex-md-nowrap p-0 ">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="<?php echo URLROOT; ?>">I.P.S. LOURDES <i class="bi bi-hospital"></i> </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-toggles"></i>
        </button>
        <!--    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3 text-white" href="#">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>">
                                <i class="bi bi-house"></i>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT; ?>Paciente">
                                <i class="bi bi-people"></i>
                                Pacientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT; ?>Medico">
                                <i class=" bi bi-person-bounding-box"></i>
                                Medicos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-file-earmark-text"></i>
                                Historias Clinicas
                            </a>
                        </li>

                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Reportes</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-printer"></i>
                                Listado Pacientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-printer"></i>
                                Medicos por Especialidad
                            </a>
                        </li>

                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Mantenimiento</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-key"></i>
                                Usuarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-cloud-download-fill"></i>
                                Backup de la Base de datos
                            </a>
                        </li>

                    </ul>
                    <hr>
                    <p class="bg-light text-center text-muted mt-5 p-1">
                        <strong> Hospisoft Versión 2.0</strong>
                        <br>
                        &copy; <a href="https://deportivocali.com.co/">Hot Coffee Software Ltda</a>
                        <br>
                        Cartago - Valle - 2022

                    </p>

                </div>

            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">