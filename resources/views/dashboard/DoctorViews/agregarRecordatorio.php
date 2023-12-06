<link rel="stylesheet" href="<?=$utils->assets("assets/extensions/flatpickr/flatpickr.min.css"); ?>" />

<section id="multiple-column-form">
  <div class="row match-height">
    <div class="col-9">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Nuevo Recordatorio</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form">
              <div class="row">
              <div class="col-md-12 col-12">
                  <div class="form-group">
                    <label for="appointment-reason-column">Asunto</label>
                    <textarea id="appointment-reason-column" class="form-control" placeholder="Asunto del recordatorio" name="appointment-reason-column"></textarea>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="reminder-date-column">Fecha y hora del Recordatorio</label>
                    <input type="text" class="form-control mb-3 flatpickr-no-config flatpickr-input active" placeholder="Seleccione fecha.." readonly="readonly" id="reminder-date-column">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="notify-checkbox">
                    <label class="form-check-label" for="notify-checkbox">Notificarme</label>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                  <button type="button" class="btn btn-primary me-1 mb-1" onclick="saveReminder()">
                    Guardar
                  </button>
                  <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                    Reiniciar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="<?=$utils->assets("assets/extensions/flatpickr/flatpickr.min.js")?>"></script>
<script src="<?=$utils->assets("assets/static/js/pages/date-picker.js")?>"></script>
<script>
  
  function saveReminder() {
    alert("Recordatorio guardado.");
  }
</script>
