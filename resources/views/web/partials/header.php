<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sitio web - IAmed</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="<?=$utils->assets('assets/lib/animate/animate.min.css')?>" rel= "stylesheet">
    <link href="<?=$utils->assets('lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=$utils->assets('css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=$utils->assets('css/style.css')?>"rel="stylesheet">
</head>

<body>
    
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
   
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                   
                </div>
                <img class="logo" src="<?=$utils->assets('img/logo1.png')?>" width="250px" alt="Image">
                <div class="d-flex">
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="text-primary m-0">Lab<span class="text-dark">Sky</span></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="<?= $utils->url('/') ?>" class="nav-item nav-link active">Inicio</a>
                        <a href="<?= $utils->url('/about') ?>" class="nav-item nav-link">Información</a>
                        <a href="<?= $utils->url('/servicios') ?>" class="nav-item nav-link">Funciones</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Páginas</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="feature.html" class="dropdown-item">Caracteristicas</a>
                                <a href="team.html" class="dropdown-item">Equipo</a>
                                <a href="testimonial.html" class="dropdown-item">Testimoninos</a>
                                <a href="appoinment.html" class="dropdown-item">Objetivos</a>
                                <a href="404.html" class="dropdown-item">Página 404</a>
                            </div>
                        </div>
                        <a href="<?= $utils->url('/contacto') ?>" class="nav-item nav-link">Contactos</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->