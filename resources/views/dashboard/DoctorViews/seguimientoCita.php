<link rel="stylesheet" href="<?=$utils->assets("assets/extensions/simple-datatables/style.css");?>" />
<link rel="stylesheet" href="<?=$utils->assets("assets/compiled/css/table-datatable.css");?>" />
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
                            <a href="<?=$utils->assets("/dashboard");?>">Dashboard</a>
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
                            <th>Motivo de la Consulta</th>
                            <th>Teléfono</th>
                            <th>Departamento</th>
                            <th>Fecha de la Consulta</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td>Isabella</td>
                      <td>Problemas Respiratorios</td>
                      <td>(503) 6123-4567</td>
                      <td>Santa Ana</td>
                      <td>2023-03-05</td>
                      <td>
                          <span class="badge bg-success">Activo</span>
                      </td>
                  </tr>
                  <tr>
                      <td>Mateo</td>
                      <td>Fractura de Tobillo</td>
                      <td>(503) 7012-3456</td>
                      <td>La Paz</td>
                      <td>2023-03-12</td>
                      <td>
                          <span class="badge bg-success">Activo</span>
                      </td>
                  </tr>
                  <tr>
                      <td>Sofía</td>
                      <td>Migraña Severa</td>
                      <td>(503) 5678-9012</td>
                      <td>Usulután</td>
                      <td>2023-03-20</td>
                      <td>
                          <span class="badge bg-danger">Inactivo</span>
                      </td>
                  </tr>
                  <tr>
                      <td>Lucas</td>
                      <td>Herida en la Mano</td>
                      <td>(503) 2123-4567</td>
                      <td>Ahuachapán</td>
                      <td>2023-04-02</td>
                      <td>
                          <span class="badge bg-success">Activo</span>
                      </td>
                  </tr>
                  <tr>
                      <td>Emma</td>
                      <td>Problemas Oculares</td>
                      <td>(503) 4987-6543</td>
                      <td>Cabañas</td>
                      <td>2023-04-15</td>
                      <td>
                          <span class="badge bg-danger">Inactivo</span>
                      </td>
                  </tr>
                  <tr>
                      <td>Liam</td>
                      <td>Conmoción Cerebral</td>
                      <td>(503) 3001-2345</td>
                      <td>Chalatenango</td>
                      <td>2023-05-01</td>
                      <td>
                          <span class="badge bg-success">Activo</span>
                      </td>
                  </tr>
                  <tr>
                      <td>Ava</td>
                      <td>Problemas Digestivos</td>
                      <td>(503) 6543-2109</td>
                      <td>La Unión</td>
                      <td>2023-05-10</td>
                      <td>
                          <span class="badge bg-danger">Inactivo</span>
                      </td>
                  </tr>
                  <tr>
                      <td>Noah</td>
                      <td>Lesión en la Rodilla</td>
                      <td>(503) 1234-5678</td>
                      <td>San Vicente</td>
                      <td>2023-06-02</td>
                      <td>
                          <span class="badge bg-success">Activo</span>
                      </td>
                  </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<script src="<?=$utils->assets('assets/extensions/simple-datatables/umd/simple-datatables.js');?>"></script>
<script src="<?=$utils->assets('assets/static/js/pages/simple-datatables.js');?>"></script>
