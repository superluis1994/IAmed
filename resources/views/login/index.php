<div id="auth">
  <div class="row h-100">
    <div class="col-lg-5 col-12">
      <div id="auth-left">
        <div class="auth-logo">
          <a href="<?= $utils->url('/login') ?>"><img src="<?= $utils->assets('assets/compiled/svg/logo.svg') ?>" alt="Logo" /></a>
        </div>
        <h1 class="auth-title">Ingresar</h1>
        <p class="auth-subtitle mb-5">
          Inicie sesión con los datos que ingresó durante el registro.
        </p>

        <form action="<?= $utils->url('/login/entrar') ?>" method="POST">
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
          <div class="form-check form-check-lg d-flex align-items-end">
            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
            <label class="form-check-label text-gray-600" for="flexCheckDefault">
              Recordar cuenta
            </label>
          </div>
          <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            Ingresar
          </button>
        </form>
        <div class="text-center mt-5 text-lg fs-4">
          <p class="text-gray-600">
            ¿No tienes una cuenta?
            <a href="<?= $utils->url('/registrar') ?>" class="font-bold">Registrarse</a>.
          </p>
          <p>
            <a class="font-bold" href="#" data-bs-toggle="modal" data-bs-target="#backdrop">¿Has olvidado tu contraseña?</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
      <div id="auth-right"></div>
    </div>
  </div>
</div>


<!--Disabled Backdrop Modal -->
<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content ">
      <div class="modal-header bg-danger">
        <h4 class="modal-title white" id="myModalLabel4">
          Disabled Backdrop
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
              <i class="bi bi-mailbox"></i>
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