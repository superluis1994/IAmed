
<div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Chatbox</h3>
                <p class="text-subtitle text-muted">
                  Our take on a chat conversation.
                </p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="<?=$utils->url('/dashboard')?>">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Chatbox
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <section class="section">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="media d-flex align-items-center">
                      <div class="avatar me-3">
                        <img src="<?= $utils->assets('assets/compiled/jpg/1.jpg') ?>" alt="" srcset="">
                        <span class="avatar-status bg-success"></span>
                      </div>
                      <div class="name flex-grow-1">
                        <h6 class="mb-0">Alfy</h6>
                        <span class="text-xs">Online</span>
                      </div>
                      <button class="btn btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-4 bg-grey">
                    <div class="chat-content">
                      <div class="chat">
                        <div class="chat-body">
                          <div class="chat-message">
                            Hi Alfy, how can i help you?
                          </div>
                        </div>
                      </div>
                      <div class="chat chat-left">
                        <div class="chat-body">
                          <div class="chat-message">
                            I'm looking for the best admin dashboard template
                          </div>
                          <div class="chat-message">
                            With bootstrap certainly
                          </div>
                        </div>
                      </div>
                      <div class="chat">
                        <div class="chat-body">
                          <div class="chat-message">
                            I recommend you to use Mazer Dashboard
                          </div>
                        </div>
                      </div>
                      <div class="chat chat-left">
                        <div class="chat-body">
                          <div class="chat-message">
                            That's great! I like it so much :)
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="message-form d-flex flex-direction-column align-items-center">
                      <a href="http://" class="black"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg></a>
                      <div class="d-flex flex-grow-1 ms-4">
                        <input type="text" class="form-control" placeholder="Type your message..">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>