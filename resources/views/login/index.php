
<div id="auth">
      <div class="row h-100">
        <div class="col-lg-5 col-12">
          <div id="auth-left">
            <div class="auth-logo">
              <a href="index.html"
                ><img src="<?=$utils->assets('assets/compiled/svg/logo.svg')?>" alt="Logo"
              /></a>
            </div>
            <h1 class="auth-title">Ingresar</h1>
            <p class="auth-subtitle mb-5">
            Inicie sesión con los datos que ingresó durante el registro.
            </p>

            <form action="index.html">
              <div class="form-group position-relative has-icon-left mb-4">
                <input
                  type="text"
                  class="form-control form-control-xl"
                  placeholder="Usuario"
                />
                <div class="form-control-icon">
                  <i class="bi bi-person"></i>
                </div>
              </div>
              <div class="form-group position-relative has-icon-left mb-4">
                <input
                  type="password"
                  class="form-control form-control-xl"
                  placeholder="Contraseña"
                />
                <div class="form-control-icon">
                  <i class="bi bi-shield-lock"></i>
                </div>
              </div>
              <div class="form-check form-check-lg d-flex align-items-end">
                <input
                  class="form-check-input me-2"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault"
                />
                <label
                  class="form-check-label text-gray-600"
                  for="flexCheckDefault"
                >
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
                <a href="auth-register.html" class="font-bold">Registrarse</a>.
              </p>
              <p>
                <a class="font-bold" href="auth-forgot-password.html"
                  >¿Has olvidado tu contraseña?</a
                >.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
          <div id="auth-right"></div>
        </div>
      </div>
    </div>