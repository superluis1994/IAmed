<div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menú</li>

              <li class="sidebar-item active">
                <a href="index.html" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>PANEL AFILIADO</span>
                </a>
              </li>
              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                <i class="bi bi-chat-fill"></i>
                  <span>Chat</span>
                </a>

                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/chatPaciente') ?>" class="submenu-link">Paciente</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/chatbot') ?>" class="submenu-link">MediBot</a>
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
                    <a href="<?=$utils->url('/dashboard/cita/agregar') ?>" class="submenu-link">Nueva Cita</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/cita/seguimiento') ?>" class="submenu-link" class="submenu-link">Seguimiento de Cita</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/cita/historiales') ?>" class="submenu-link">Historiales Clínicos</a>
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
                    <a href="<?=$utils->url('/dashboard/recordatorios/agregar') ?>" class="submenu-link">Agregar</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/recordatorios/historial') ?>" class="submenu-link">Historial</a>
                  </li>


                </ul>
              </li>

              <li class="sidebar-title">Configuración </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                <i class="bi bi-person-fill"></i>
                  <span>Perfil De Afiliado</span>
                </a>

                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/configuracion/cambiarFoto') ?>">Cambiar foto</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/configuracion/datosPersonales') ?>" class="submenu-link">Datos Personales</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/configuracion/suscripciones') ?>" class="submenu-link">Suscripción</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/configuracion/perfilProfesional') ?>" class="submenu-link">Perfil Profesional</a>
                  </li>

                  <li class="submenu-item">
                    <a href="<?=$utils->url('/dashboard/configuracion/comunidadReferidos') ?>" class="submenu-link">Comunidad de Referidos</a>
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
                    <a href="<?=$utils->url('/dashboard/privacidad/newPassword');?>" class="submenu-link">Cambio de Contraseña</a>
                  </li>
                </ul>
              </li>
              <Br>

              <ul class="list-unstyled">
                <li class="sidebar-item-">
                    <a href="<?=$utils->url('/dashboard/suscripciones');?>" class="btn btn-primary">
                        <i class="bi bi-gem"></i>
                        <span>&nbsp;&nbsp;Cambiar a Premium</span>
                    </a>
                </li>
              </ul>

              <li class="sidebar-title">Soporte Técnico</li>

              <li class="sidebar-item">
                <a href="https://zuramai.github.io/mazer/docs" class="sidebar-link">
                  <i class="bi bi-life-preserver"></i>
                  <span>Soporte</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="https://zuramai.github.io/mazer/docs" class="sidebar-link">
                <i class="bi bi-question-circle-fill"></i>
                  <span>Ayuda</span>
                </a>
              </li>

            </ul>
          </div>