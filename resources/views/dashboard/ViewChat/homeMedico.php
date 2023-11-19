<link rel="stylesheet" href="<?= $utils->assets("corousel/css/owl.carousel.min.css") ?>" />
<link rel="stylesheet" href="<?= $utils->assets("corousel/css/styles.css") ?>" />
<div class="row">

    <div class="col-12 col-md-10 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Nuevo Chat
                </li>
            </ol>
        </nav>
    </div>
</div>
<div class="page-heading col-12 col-md-10">
    <div class="page-title">

        <div class="col-12 col-md-12 order-md-1 order-last  mb-3  ">
            <h2 class="text-center">INICIO</h2>
            <p class="text-subtitle text-muted text-center">Escribe el nombre del especialista con el que deseas chatear. </p>
            <div class="row d-flex justify-content-center align-items-center">

                <form class="form form-vertical col-12 col-md-8 d-flex ">
                    <input type="text" class="form-control me-2" style="width: 80%;" placeholder="Juan Antonio Sorto" id="first-name-icon">
                    <button type="submit" class="btn btn-primary  me-1 mb-1 ">
                        Buscar
                    </button>
                </form>
            </div>



        </div>


    </div>

    <div class="row">
        <hr class="text-mute">
        <!-- <h5 class="text-center">Categorias</h5> -->
        <div id="slider" class="col-12 pt-5">
            <div class="container">
                <h1 class="text-center"><b>Categorias</b></h1>
                <div class="slider">
                    <div class="owl-carousel">
                        <?php
                        foreach ($data["especialidades"] as $categoria) {
                            echo <<<HTML
        <div class="slider-card">
            <!-- <div class="d-flex justify-content-center align-items-center mb-4">
                <img src='{$utils->assets("assets/static/images/categorias-cirujano.png")}' alt="" height="100" width="20">
            </div> -->
            <h5 class="mb-0 text-center "><b>{$categoria["nombre"]}</b></h5>
            <p class="text-center p-4">{$categoria["descripcion"]} </p>
            <a class="btn btn-sm btn-primary block" href="{$utils->url("/dashboard/chatMedico/categoria/{$categoria["id_especialidad"]}")}">Seleccionar</a>
        </div>
        HTML;
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="<?= $utils->assets('corousel/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= $utils->assets('corousel/js/script.js') ?>"></script>