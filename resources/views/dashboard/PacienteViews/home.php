
<div class="col-12 col-lg-12">
  <div class="row">
    <div class="col-6 col-lg-3 col-md-6">
      <a href="<?=$utils->url('/dashboard/comunidaMedica');?>">
        <div class="card">
          <div class="card-body px-4 py-5">
            <div class="row">
              <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                <div class="stats-icon purple mb-2">
                <i class="iconly-boldUser"></i>
                </div>
              </div>
              <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                <h6 class="text-muted font-semibold">
                Comunidad
              </h6>
              <h6 class="font-extrabold mb-0">Médica</h6>
            </div>
          </div>
        </div>
      </div>
    </a>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
      <a href="<?=$utils->url('/dashboard/chatbot');?>">
        <div class="card">
          <div class="card-body px-4 py-5">
            <div class="row">
              <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                <div class="stats-icon blue mb-2">
                  <i class="iconly-boldChat"></i>

              </div>
            </div>
            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
              <h6 class="text-muted font-semibold">Chat </h6>
              <h6 class="font-extrabold mb-0">con MediBot</h6>
            </div>
          </div>
        </div>
      </div>
    </a>

    </div>
    <div class="col-6 col-lg-3 col-md-6">
    <a href="<?=$utils->url('/dashboard/recordatorios');?>">
      <div class="card">
        <div class="card-body px-4 py-5">
          <div class="row">
            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
              <div class="stats-icon green mb-2">
                <i class="iconly-boldAdd"></i>
              </div>
            </div>
            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
              <h6 class="text-muted font-semibold">Recordatorios</h6>
              <h6 class="font-extrabold mb-0">Médicos</h6>
            </div>
          </div>
        </div>
      </div>
    </a>
    </div>
    <div class="col-6 col-lg-3 col-md-6">
    <a href="<?=$utils->url('/dashboard/favoritos');?>">
      <div class="card">
        <div class="card-body px-4 py-5">
          <div class="row">
            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
              <div class="stats-icon red mb-2">
                <i class="iconly-boldBookmark"></i>
              </div>
            </div>
            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
              <h6 class="text-muted font-semibold">Contactos de</h6>
              <h6 class="font-extrabold mb-0">Emergencia</h6>
            </div>
          </div>
        </div>
      </div>
    </a>
    </div>
  </div>
  
  <div class="row">
    <div class="col-12 col-xl-3">
      <div class="card">
        <div class="card-header">
          <h4>Recordatorios Activos</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-7">
              <div class="d-flex align-items-center">
                <svg class="bi text-primary" width="32" height="32" fill="blue" style="width: 10px">
                  <use xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                </svg>
                <h5 class="mb-0 ms-3">Citas médicas</h5>
              </div>
            </div>
            <div class="col-5">
              <h5 class="mb-0 text-end">2</h5>
            </div>
            <div class="col-12">
              <div id="chart-europe"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-7">
              <div class="d-flex align-items-center">
                <svg class="bi text-success" width="32" height="32" fill="blue" style="width: 10px">
                  <use xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                </svg>
                <h5 class="mb-0 ms-3">Medicamentos</h5>
              </div>
            </div>
            <div class="col-5">
              <h5 class="mb-0 text-end">5</h5>
            </div>
            <div class="col-12">
              <div id="chart-america"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-6">
      <div class="card">
        <div class="card-header">
          <h4>Chats Recientes</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-lg">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Especialidad</th>
                  <th>Mensaje</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="col-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-md">
                      <img src="<?=$utils->assets('assets/compiled/jpg/2.jpg')?>" />
                      </div>
                      <p class="font-bold ms-3 mb-0">Paul Cartagena</p>
                    </div>
                  </td>
                  <td class="col-auto">
                    <p class="mb-0">
                      Pediatra
                    </p>
                  </td>
                  <td class="col-auto">
                    <p class="mb-0">
                      Su cita está agendada para mañana.
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="col-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-md">
                      <img src="<?=$utils->assets('assets/compiled/jpg/4.jpg')?>" />
                      </div>
                      <p class="font-bold ms-3 mb-0">Melvin Marroquín</p>
                    </div>
                  </td>
                  <td class="col-auto">
                    <p class="mb-0">
                      Fisioterapeuta
                    </p>
                  </td>
                  <td class="col-auto">
                    <p class="mb-0">
                      Los horarios son de 7 am a 4 pm.
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="col-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-md">
                      <img src="<?=$utils->assets('assets/compiled/jpg/7.jpg')?>" />
                      </div>
                      <p class="font-bold ms-3 mb-0">Luis Sorto</p>
                    </div>
                  </td>
                  <td class="col-auto">
                    <p class="mb-0">
                      Médico General
                    </p>
                  </td>
                  <td class="col-auto">
                    <p class="mb-0">
                      Envíeme su historial médico.
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="px-4">
              <button class="btn btn-block btn-sm btn-outline-primary font-bold mt-3">
                Ver todos
              </button>
            </div>
          </div>
        </div>
      </div>
      
    </div>
      <div class="col-12 col-lg-3">

<style>
  .carousel-caption {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.8;
  padding: 20px;
  background-color: #ffffff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

</style>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=$utils->assets('assets/compiled/jpg/building.jpg');?>" class="d-block w-1000" alt="...">
      <div class="carousel-caption">
        <a href="#" class="btn btn-primary" style="position: absolute; bottom: 0; right: 0;">ir al link</a>
      </div>
      
    </div>
    <div class="carousel-item active">
      <img src="<?=$utils->assets('assets/compiled/jpg/building.jpg');?>" class="d-block w-1000" alt="...">
      <div class="carousel-caption">
        <a href="#" class="btn btn-primary" style="position: absolute; bottom: 0; right: 0;">ir al link</a>
      </div>
      
    </div>
  

  </div>
</div>



      
        
        
        



      </div>
  </div>
</div>
