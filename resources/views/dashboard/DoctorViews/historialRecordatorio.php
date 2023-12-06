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
              <h3>Seguimiento de <b>Recordatorios</b></h3>
              <p class="text-subtitle text-muted">
               Tu listado de los recordatorios
              </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
              <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="<?=$utils->assets("/dashboard");?>">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Recordatorios
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <section class="section">
          <div class="card">
            <div class="card-header">Listado de Recordatorios</div>
            <div class="card-body">
              <table class="table table-striped" id="table1">
                <thead>
                  <tr>
                    <th>Titulo</th>
                    <th>Fecha/Hora</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                foreach ($data["Recordatorios"] as $key => $value) {
                    // $active = $key == $data['active'] ? 'active' : '';
                      $class=[
                        0=>"bg-danger",
                        1=>"Realizada"
                      ];
                      if($value["completado"]==1){
                      $class[0]="bg-success";
                      $class[1]="Pendiente";
                      
                    }
                    echo <<<HTML
                    <tr>
                      <td>{$value["titulo"]}</td>
                      <td>{$value["fecha_hora"]}</td>
                      <td>
                        
                        <span class="badge {$class[0]}">$class[1]</span>
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

      <script src="<?=$utils->assets('assets/extensions/simple-datatables/umd/simple-datatables.js');?>"></script>
    <script src="<?=$utils->assets('assets/static/js/pages/simple-datatables.js');?>"></script>