<link rel="stylesheet" href="<?= $utils->assets("css/bootstrap.min.css")?>" />
<div id="auth">
  <div class="row h-100">
    <div class="col-lg-5 col-12">
      <div id="auth-left">
        <div class="col-md-12">
          <a href="<?= $utils->url('/login') ?>"><img src="<?= $utils->assets('img/logo2.png') ?>" width="300px" alt="Logo" /></a>
          <!--<h1 class="auth-title">Ingresar</h1>-->
          <br><br>
          <p class="auth-subtitle mb-5">
            Inicie sesión con los datos que ingresó durante el registro.
          </p>
        </div>

        <form method="POST" id="frmLogin" async>
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" name="user" class="form-control form-control-xl" placeholder="Usuario" />
            <div class="form-control-icon">
              <i class="bi bi-person"></i>
            </div>
          </div>
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password" class="form-control form-control-xl" placeholder="Contraseña" />
            <div class="form-control-icon">
              <i class="bi bi-shield-lock"></i>
            </div>
          </div>
          <div class="form-group position-relative has-icon-left mb-2 ">

            <p class="text-end">
              <a class="font-bold" href="#" data-bs-toggle="modal" data-bs-target="#backdrop">¿Has olvidado tu contraseña?</a>
            </p>
          </div>
          <!-- <div class="form-check form-check-lg d-flex align-items-end">
            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
            <label class="form-check-label text-gray-600" for="flexCheckDefault">
              Recordar cuenta
            </label>
          </div> -->
          <button type="submit" onclick="formularioEnvio('<?= $utils->url('/login/entrar');?>','frmLogin')" class="btn btn-primary btn-block btn-lg shadow-lg mt-2">
            Ingresar
          </button>
        </form>
        <div class="text-center mt-3 text-lg fs-4">
          <p class="text-gray-600">
            ¿No tienes una cuenta?
            <a href="<?= $utils->url('/registrar'); ?>" class="font-bold">Registrarse</a>.
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block" >
      <div id="auth-right"  >
        <!-- <div id="carouselExampleFade" class="carousel slide carousel-fade "  data-bs-ride="carouselfade">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleFade" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active" >
              <img src="<?= $utils->assets("/img/team-5.jpg");?>" class="d-block w-100" alt="..."  />
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>
                  Nulla vitae elit libero, a pharetra augue mollis
                  interdum.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/compiled/png/2.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>
                  Nulla vitae elit libero, a pharetra augue mollis
                  interdum.
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/compiled/png/3.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>
                  Nulla vitae elit libero, a pharetra augue mollis
                  interdum.
                </p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div> -->
        
      </div>

      <!-- <div class="container" id="auth-right">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?= $utils->assets("/img/team-5.jpg"); ?>" style="background-position:center; background-repeat:no-repeat" class="d-block w-100 img-fluid " alt="Imagen 1">

            </div> -->
          </div>
          <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </button> -->
        <!-- </div>
      </div> -->

      

    </div>
  </div>
</div>


<!--Disabled Backdrop Modal -->
<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content ">
      <div class="modal-header bg-danger">
        <h4 class="modal-title white" id="myModalLabel4">
          Recupera tu contraseña
        </h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <label for="basicInput" class="head">Correo Electronico</label>
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" name="user" class="form-control form-control-xl" placeholder="ejemplo@email.com" />
            <div class="form-control-icon">
              <!-- <i class="bi bi-person"></i> -->
              <i class="bi bi-envelope"></i>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
          <i class="bx bx-x d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Cancelar</span>
        </button>
        <button type="button" class="btn btn-danger ms-1" data-bs-dismiss="modal">
          <i class="bx bx-check d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Restablecer</span>
        </button>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo $utils->assets("js/login.js"); ?>" type="text/javascript"></script>