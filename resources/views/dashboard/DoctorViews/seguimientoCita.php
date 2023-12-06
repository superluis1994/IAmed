<link rel="stylesheet" href="<?= $utils->assets("assets/extensions/simple-datatables/style.css"); ?>" />
<link rel="stylesheet" href="<?= $utils->assets("assets/compiled/css/table-datatable.css"); ?>" />
<header class="mb-3">
  <a href="#" class="burger-btn d-block d-xl-none">
    <i class="bi bi-justify fs-3"></i>
  </a>
</header>

<div class="page-heading">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Seguimiento de <b>Citas</b></h3>
        <p class="text-subtitle text-muted">
          Tu listado de citas de todos tus pacientes
        </p>
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?= $utils->assets("/dashboard"); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Seguimiento Cita
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <section class="section">
    <div class="card">
      <div class="card-header">Listado de Pacientes</div>
      <div class="card-body">
        <table class="table table-striped" id="table1">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Telefono</th>
              <th>Fecha/Hora</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($data["consultas"] as $key => $value) {
              // $active = $key == $data['active'] ? 'active' : '';
              $class = [
                0 => "bg-danger",
                1 => "Realizada"
              ];
              if ($value["status"] == 1) {
                $class[0] = "bg-success";
                $class[1] = "Pendiente";
              }
              echo <<<HTML
                    <tr>
                      <td>{$value["nombre"]}</td>
                      <td>{$value["apellido"]}</td>
                      <td>{$value["cel"]}</td>
                      <td>{$value["tiempo"]}</td>
                      <td>  
                        <span class="badge  {$class[0]}" style="cursor: pointer;" data-bs-toggle="modal"  data-bs-target="#ModalSeguiCita" 
                                                data-bs-id="{$value['id_user']}" data-bs-nota="{$value['nota']}" data-bs-url="{$utils->url('/'.$value['url'])}">$class[1]</span>
                      </td>
                    </tr>
              
            HTML;
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>

<!--Disabled ModalSeguiCita Modal -->
<div class="modal fade text-left" id="ModalSeguiCita" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel4">
          Seguimiento del Paciente
        </h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            <h2>Motivo de la consulta</h2>
            <p id="motivo">
              Motivo de la consulta
            </p>
          </div>
          <div class="col-4">
            <div class="card">
              <div class="card-content">
                <img src="<?= $utils->assets("assets/static/images/faces/2.jpg") ?>" class="card-img-top img-fluid" alt="singleminded" />
                <div class="card-body">
                  <h5 class="card-title" id="nomPaciente">Be Single Minded</h5>
                  <p class="card-text" id="PacienteInf">
                    Chocolate sesame snaps apple pie danish cupcake sweet
                    roll jujubes tiramisu.Gummies bonbon apple pie fruitcake
                    icing biscuit apple pie jelly-o sweet roll.
                  </p>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <a href="#" class="btn btn-primary">Cerrar Cita</a>
                  <a href="#" class="btn btn-light">Chat Paciente</a>
              </li>
                <!-- <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
          <i class="bx bx-x d-block d-sm-none"></i>
          <span class="d-none d-sm-block">Close</span>
        </button>
      </div>
    </div>
  </div>
</div>
<script src="<?= $utils->assets('assets/extensions/simple-datatables/umd/simple-datatables.js'); ?>"></script>
<script src="<?= $utils->assets('assets/static/js/pages/simple-datatables.js'); ?>"></script>
<script src="<?= $utils->assets('js/recordatorios/historial.js'); ?>"></script>