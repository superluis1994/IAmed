<div id="auth">
  <div class="row h-100">
    <div class="col-lg-5 col-12">
      <div id="auth-left">
        <div class="col-md-12">
          <a href="index.html">
            <img src="<?= $utils->assets('assets/compiled/svg/logo.svg') ?>" width="300" alt="Logo" />
          </a>
          <h1 class="auth-title">Registrarse</h1>
        </div>
        <!-- <p class="auth-subtitle mb-5">
              Ingresa tus datos para registrarte en nuestro sitio web.
            </p> -->

        <form action="index.html">
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-xl" placeholder="Correo electrónico" />
            <div class="form-control-icon">
              <i class="bi bi-envelope"></i>
            </div>
          </div>
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-xl" placeholder="Nombre de usuario" />
            <div class="form-control-icon">
              <i class="bi bi-person"></i>
            </div>
          </div>
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-xl" placeholder="Contraseña" />
            <div class="form-control-icon">
              <i class="bi bi-shield-lock"></i>
            </div>
          </div>
          <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-xl" placeholder="Confirmar contraseña" />
            <div class="form-control-icon">
              <i class="bi bi-shield-lock"></i>
            </div>
          </div>
          <div class="form-group position-relative has-icon-left mb-4">

            <select class="form-select form-control form-control-xl" id="basicSelect">
              <option>Tipo de Usuario</option>
              <?php foreach($data as $key => $value){
                echo " <option value'".$value['id_rol']."'>".$value['nombreRol']."</option>";
              };
              ?>
              <!-- <option>Paciente</option>
              <option>Doctor</option> -->
            </select>
            <div class="form-control-icon">
              <i class="bi bi-people"></i>
            </div>
          </div>
          <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            Registrarse
          </button>
        </form>
        <div class="text-center mt-5 text-lg fs-4">
          <p class="text-gray-600">
            ¿Ya tienes una cuenta?<br>
            <a href="<?= $utils->url('/login') ?>" class="font-bold">Inicia sesión</a>.
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
      <div id="auth-right"></div>
    </div>
  </div>
</div>