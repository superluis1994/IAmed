<link rel="stylesheet" href="<?=$utils->assets("assets/extensions/flatpickr/flatpickr.min.css"); ?>" />

<section id="multiple-column-form">
  <div class="row match-height">
    <div class="col-9">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Nueva cita</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form">
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="patient-name-column">Nombre del Paciente</label>
                    <input type="text" id="patient-name-column" class="form-control" placeholder="Nombre del Paciente" name="patient-name-column">
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="patient-last-name-column">Apellido del Paciente</label>
                    <input type="text" id="patient-last-name-column" class="form-control" placeholder="Apellido del Paciente" name="patient-last-name-column">
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="patient-id-column">ID del Paciente</label>
                    <input type="text" id="patient-id-column" class="form-control" placeholder="ID del Paciente" name="patient-id-column">
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="patient-email-column">Numero de telefono del Paciente</label>
                    <input type="email" id="patient-email-column" class="form-control" name="patient-email-column" placeholder="Numero de telefono del Paciente">
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="appointment-date-column">Fecha de la consulta</label>
                    <input type="text" class="form-control mb-3 flatpickr-no-config flatpickr-input active" placeholder="Seleccione fecha.." readonly="readonly">
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="patient-department-column">Departamento del Paciente</label>
                    <select id="patient-department-column" class="form-control" name="patient-department-column">
                      <option value="Ahuachapán">Ahuachapán</option>
                      <option value="Cabañas">Cabañas</option>
                      <option value="Chalatenango">Chalatenango</option>
                      <option value="Cuscatlán">Cuscatlán</option>
                      <option value="La Libertad">La Libertad</option>
                      <option value="La Paz">La Paz</option>
                      <option value="La Unión">La Unión</option>
                      <option value="Morazán">Morazán</option>
                      <option value="San Miguel">San Miguel</option>
                      <option value="San Salvador">San Salvador</option>
                      <option value="San Vicente">San Vicente</option>
                      <option value="Santa Ana">Santa Ana</option>
                      <option value="Sonsonate">Sonsonate</option>
                      <option value="Usulután">Usulután</option>
                      
                    </select>
                  </div>
                </div>
                <div class="col-md-12 col-12">
                  <div class="form-group">
                    <label for="appointment-reason-column">Motivo de la Consulta</label>
                    <textarea id="appointment-reason-column" class="form-control" placeholder="Motivo de la Consulta" name="appointment-reason-column"></textarea>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary me-1 mb-1">
                    Enviar
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
