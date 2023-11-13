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
    <!-- <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Default Layout</h4>
            </div>
            <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam,
                commodi? Ullam quaerat similique iusto temporibus, vero aliquam
                praesentium, odit deserunt eaque nihil saepe hic deleniti?
                Placeat delectus quibusdam ratione ullam!
            </div>
        </div>
    </section> -->
    
    <!-- <div class="row">
        <hr class="text-mute">
        <h5 class="text-center">Categorias</h5>


        <div class="col-md-4 col-sm-12 col-lg-4">
            <div class="card">
                <div class="card-content">
                    <div class="card-body" >
                        <div class="row">
                            <div class="col-4">
                                <img class="card-img-top img-fluid" src="<?=$utils->assets('assets/static/images/categorias-cirujano.png');?>" alt="Card image cap" style="height: 5rem">

                            </div>
                            <div class="col-8">
                                <h4 class="card-title">CIRUJANO</h4>
                                <p class="card-text">Todo tipo de cirujano</p>
                                <a class="btn btn-sm btn-primary block" href="<?=$utils->url("/dashboard/chatMedico/categoria/c12")?>">Seleccionar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div> -->



    <div class="row">
        <hr class="text-mute">
        <h5 class="text-center">Categorias</h5>
        <?php

foreach ($data as $categoria) {
    echo <<<HTML
<div class="col-md-4 col-sm-12 col-lg-4">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <img class="card-img-top img-fluid" src='"$utils->assets("assets/static/images/categorias-cirujano.png")"' alt="Card image cap" style="height: 5rem">
                    </div>
                    <div class="col-8">
                        <h4 class="card-title">{$categoria["nombre"]}</h4>
                        <p class="card-text">{$categoria["descripcion"]}</p>
                        <a class="btn btn-sm btn-primary block" href='".$utils->url("/dashboard/chatMedico/categoria/{$categoria["id_especialidad"]}")."'>Seleccionar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
HTML;
}

?>

</div>
