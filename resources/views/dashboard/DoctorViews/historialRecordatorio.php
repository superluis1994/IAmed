<link rel="stylesheet" href="<?=$utils->assets('assets/extensions/dragula/dragula.min.css')?>" />

<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Historial de recordatorios</h3>
                <p class="text-subtitle text-muted">
                    Una implementación decorada y clasificable de una lista de tareas.
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Panel de Control</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Historial de recordatorios
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Inicia el Widget de Aplicación de Tareas -->
    <section class="tasks">
        <div class="row">
            <div class="col-lg-12">
                <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex">
                            <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Tareas
                        </h4>
                        <ul class="list-inline d-flex mb-0">
                            <li class="d-flex align-items-center">
                                <i class="bx bx-check-circle font-medium-3 me-50"></i>
                                <div class="dropdown">
                                    <div class="dropdown-toggle me-1" role="button" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Todas las Tareas
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Opción 1</a>
                                        <a class="dropdown-item" href="#">Opción 2</a>
                                        <a class="dropdown-item" href="#">Opción 3</a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bx bx-sort me-50 font-medium-3"></i>
                                <div class="dropdown">
                                    <div class="dropdown-toggle" role="button" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Todas las Tareas
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#">Opción 1</a>
                                        <a class="dropdown-item" href="#">Opción 2</a>
                                        <a class="dropdown-item" href="#">Opción 3</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body px-0 py-1 overflow-auto">
                        <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                            <li class="widget-todo-item">
                                <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center gap-2">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox-1" />
                                        </div>
                                        <label for="checkbox-1" class="widget-todo-title ms-2">Reunión con el Paciente Juan Pérez</label>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-success me-1">08/12/2023</div>
                                        <div class="badge badge-pill bg-light-info me-1">8 AM</div>
                                        <div class="badge badge-pill bg-light-info me-1">PENDIENTE</div>
                                        <div class="avatar bg-warning">
                                            <img src="./assets/compiled/jpg/doctor.jpg" alt="" srcset="" />
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center gap-2">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox-2" />
                                        </div>
                                        <label for="checkbox-2" class="widget-todo-title ms-2">Recoger lote de medicamentos en la farmacia</label>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-info me-1">12/12/2023</div>
                                        <div class="badge badge-pill bg-light-info me-1">2 PM</div>
                                        <div class="badge badge-pill bg-light-info me-1">FINALIZADO</div>
                                        <div class="avatar bg-warning">
                                            <img src="./assets/compiled/jpg/pharmacy.jpg" alt="" srcset="" />
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center gap-2">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox-2" />
                                        </div>
                                        <label for="checkbox-2" class="widget-todo-title ms-2">Reunion con el doctor velasquez</label>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill bg-light-info me-1">06/12/2023</div>
                                        <div class="badge badge-pill bg-light-info me-1">9 AM</div>
                                        <div class="badge badge-pill bg-light-success me-1">FINALIZADO</div>
                                        <div class="avatar bg-warning">
                                            <img src="./assets/compiled/jpg/pharmacy.jpg" alt="" srcset="" />
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="<?=$utils->assets('assets/extensions/dragula/dragula.min.js')?>"></script>
<script src="<?=$utils->assets('assets/static/js/pages/ui-todolist.js')?>"></script>
