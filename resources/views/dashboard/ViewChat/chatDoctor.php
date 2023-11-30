<div class="page-heading">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Chat con Profesional de la Salud</h3>
            <p class="text-subtitle text-muted">
              Puedes iniciar una conversación.
            </p>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?= $utils->Url("/dashboard"); ?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  ChatMedico
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <section class="section">
        <div class="row">
          <div class="col-md-9"> <!-- TAMAÑO DEL CHAT -->
            <div class="card">
              <div class="card-header">
                <div class="media d-flex align-items-center">
                  <div class="avatar me-3">
                    <img src="./assets/compiled/jpg/1.jpg" alt="" srcset="" />
                    <span class="avatar-status bg-success"></span>
                  </div>
                  <div class="name flex-grow-1">
                    <h6 class="mb-0"><?= $data["msg"][0]['participants'][0]["username"] ?>
                    </h6>
                    <span class="text-xs">En linea</span>
                  </div>
                  <a href="<?=$utils->url("/dashboard/chatMedico");?>" class="btn btn-sm">
                    <i data-feather="x"></i>
                  </a>
                </div>
              </div>
              <div class="card-body pt-4 bg-grey">
                <div class="chat-content">
                <?php

                // echo var_dump($data["msg"]);
              foreach ($data["msg"][0]["messages"] as $key => $chat) {

                $class = $chat["senderId"] == $_SESSION["datosUser"]["id"] ? '' : 'chat-left';
                echo <<<HTML
                          <div class="chat {$class}">
                            <div class="chat-body">
                              <div class="chat-message">
                                {$chat["message"]}
                              </div>
                            </div>
                          </div>
                HTML;
              }

              ?>
                  <!-- <div class="chat">
                    <div class="chat-body">
                      <div class="chat-message">
                        Hola, necesito agendar una cita médica. 
                      </div>
                    </div>
                  </div>
                  <div class="chat chat-left">
                    <div class="chat-body">
                      <div class="chat-message">
                        Hola! 
                      </div>
                      <div class="chat-message">
                        El dia de mañana a las 8:00 am puedo atenderlo.
                      </div>
                    </div>
                  </div>
                  <div class="chat">
                    <div class="chat-body">
                      <div class="chat-message">
                        Excelente, muchas gracias. 
                      </div>
                    </div>
                  </div>
                  <div class="chat chat-left">
                    <div class="chat-body">
                      <div class="chat-message">
                        A su servicio! :)
                      </div>
                    </div>
                  </div> -->


                </div>
              </div>
              <div class="card-footer">
                <div class="message-form d-flex flex-direction-column align-items-center">
                  <a href="http://" class="black">
                    <i data-feather="smile"></i>
                  </a>
                  <div class="d-flex flex-grow-1 ms-4">
                    <input type="text" class="form-control" placeholder="Escribe el mensaje.." />
                  </div>
                  <a href="#">
                    <i class="bi bi-send-check" style=" font-size: 2em;"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>


    </div>
</div>
<?php 
// print_r($data)
?>