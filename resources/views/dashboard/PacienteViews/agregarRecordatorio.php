<link rel="stylesheet" href="<?=$utils->assets("assets/extensions/flatpickr/flatpickr.min.css"); ?>" />
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Agregar <b>Recordatorios</b></h3>
                <p class="text-subtitle text-muted">
                   puede agregar todos los recordatorios que necesites
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?=$utils->assets("/dashboard");?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Agregar Recordatorio
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
<section id="multiple-column-form">
  <div class="row match-height">
    <div class="col-9">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <form method="POST" class="form" id="FormRecordatorio" async >
              <div class="row mt-3">
                <div class="col-md-6 col-12">
                <div class="form-group">
                      <label for="basicInput">Titulo</label>
                      <input type="text" class="form-control" name="titulo" id="basicInput" placeholder="titulo del recordatorio">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="reminder-date-column">Fecha y hora del Recordatorio</label>
                    <input type="text" name="fechaHora" class="form-control mb-3 flatpickr-no-config flatpickr-input active" placeholder="Seleccione fecha.." readonly="readonly" id="reminder-date-column">
                  </div>
                </div>
              <div class="col-md-12 col-12">
                  <div class="form-group">
                    <label for="appointment-reason-column">Asunto</label>
                    <textarea id="appointment-reason-column" name="descripcion" class="form-control" placeholder="Asunto del recordatorio" name="appointment-reason-column"></textarea>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" name="recordarme" id="notify-checkbox">
                    <label class="form-check-label" for="notify-checkbox">Notificarme</label>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary me-1 mb-1" onclick="formularioEnvio('<?= $utils->url('/dashboard/recordatorios/add/');?>','FormRecordatorio')">
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
</div>

<script src="<?=$utils->assets("assets/extensions/flatpickr/flatpickr.min.js")?>"></script>
<script src="<?=$utils->assets("assets/static/js/pages/date-picker.js")?>"></script>
<script src="<?=$utils->assets("js/recordatorios/recordatorios.js")?>"></script>
<script>
  
  // function saveReminder() {
  //   alert("Recordatorio guardado.");
  // }
</script>
