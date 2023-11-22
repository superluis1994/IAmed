<div id="error">
  <div class="error-page container">
    <div class="col-md-8 col-12 offset-md-2">
      <div class="text-center">
        <img class="img-error" src="<?= $utils->assets('assets/compiled/svg/error-404.svg') ?>" alt="Not Found" />
        <h1 class="error-title">NOT FOUND</h1>
        <p class="fs-5 text-gray-600">
        La página que estás buscando no existe.
        </p>
        <a href="<?= $utils->url('/dashboard'); ?>" class="btn btn-lg btn-outline-primary mt-3">Regresar</a>
      </div>
    </div>
  </div>
</div>