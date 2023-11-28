<div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menú</li>

              <li class="sidebar-item active">
                <a href="<?=$utils->url('/dashboard');?>" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>PANEL PACIENTE</span>
                </a>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                <i class="bi bi-people-fill"></i>
                  <span>Comunidad Médica</span>
                </a>

                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/sectorPrivado');?>" class="submenu-link">Sector Privado</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/sectorPublico');?>" class="submenu-link">Sector Público</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/centroAsistecia');?>" class="submenu-link">Centro de Asistencia Médica</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/farmacias');?>" class="submenu-link">Farmacias</a>
                  </li>


                </ul>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                <i class="bi bi-chat-fill"></i>
                  <span>Chat</span>
                </a>

                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="<?= $utils->url('/dashboard/chatbot') ?>" class="submenu-link">MediBot</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?= $utils->url('/dashboard/chatMedico') ?>" class="submenu-link">Médico</a>
                  </li>

                </ul>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                <i class="bi bi-bell-fill"></i>
                  <span>Recordatorios</span>
                </a>

                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="<?= $utils->url('/dashboard/recordatorios/agregar') ?>" class="submenu-link">Agregar</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?= $utils->url('/dashboard/recordatorios/historial') ?>" class="submenu-link">Historial</a>
                  </li>


                </ul>
              </li>
              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                  <span>Citas</span>
                </a>

                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/cita/citaEnLinea');?>" class="submenu-link">Cita en Línea</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/historialCitasPaciente');?>" class="submenu-link">Historial</a>
                  </li>


                </ul>
              </li>

              <li class="sidebar-title">Configuración </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                <i class="bi bi-person-fill"></i>
                  <span>Perfil De Usuario</span>
                </a>

                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="form-element-input.html" class="submenu-link">Cambiar foto</a>
                  </li>

                  <li class="submenu-item">
                    <a href="form-element-input-group.html" class="submenu-link">Datos Personales</a>
                  </li>
                  
                  </li>
                </ul>
              </li>



              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                <i class="bi bi-shield-fill"></i>
                  <span>Privacidad</span>
                </a>

                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="form-validation-parsley.html" class="submenu-link">Cambio de Contraseña</a>
                  </li>
                </ul>
              </li>
              <Br>

                <ul class="list-unstyled">
                <li class="sidebar-item-">
                    <a href="<?=$utils->url('/dashboard/suscripciones');?>" class="btn btn-primary">
                        <i class="bi bi-gem"></i>
                        <span>&nbsp;&nbsp;Suscripción Premium</span>
                    </a>
                </li>
              </ul>
              
              <li class="sidebar-title">Soporte Técnico</li>

              <li class="sidebar-item">
                <a href="" class="sidebar-link">
                <i class="bi bi-headset"></i>
                  <span>Soporte</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="" class="sidebar-link">
                <i class="bi bi-question-circle-fill"></i>
                  <span>Ayuda</span>
                </a>
              </li>

          </div>