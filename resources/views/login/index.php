<div id="auth">
  <div class="row h-100">
    <div class="col-lg-5 col-12">
      <div id="auth-left">
        <div class="col-md-12">
          <a href="<?= $utils->url('/login') ?>">
          <img src="<?= $utils->assets('img/logo2.png') ?>" width="300px" alt="Logo" />
        </a>
          <!--<h1 class="auth-title">Ingresar</h1>-->
          <br><br>
          <p class="auth-subtitle mb-5">
            Inicie sesión con los datos que ingresó durante el registro.
          </p>
        </div>

        <form method="POST" id="frmLogin" async>
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" name="user" class="form-control form-control-xl" placeholder="Usuario" required/>
            <div class="form-control-icon">
              <i class="bi bi-person"></i>
            </div>
          </div>
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password" class="form-control form-control-xl" placeholder="Contraseña" required/>
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
      <!-- <div id="auth-right"  >
     
      </div> -->

      <div id="auth-right" >
    <!-- <h2 class="mb-3">Título</h2>
    <button type="button" class="btn btn-primary">Botón</button> -->
  </div>
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
<script src="<?php echo $utils->assets("js/login/login.js"); ?>" type="text/javascript"></script>