
    <div id="app">
      <div id="sidebar">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
              <div class="logo">
                <a href="index.html"
                  ><img
                    src="<?= $utils->assets('assets/compiled/svg/logo.svg') ?>"
                    alt="Logo"
                    srcset=""
                /></a>
              </div>
              <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  aria-hidden="true"
                  role="img"
                  class="iconify iconify--system-uicons"
                  width="20"
                  height="20"
                  preserveAspectRatio="xMidYMid meet"
                  viewBox="0 0 21 21"
                >
                  <g
                    fill="none"
                    fill-rule="evenodd"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                      opacity=".3"
                    ></path>
                    <g transform="translate(-210 -1)">
                      <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                      <circle cx="220.5" cy="11.5" r="4"></circle>
                      <path
                        d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"
                      ></path>
                    </g>
                  </g>
                </svg>
                <div class="form-check form-switch fs-6">
                  <input
                    class="form-check-input me-0"
                    type="checkbox"
                    id="toggle-dark"
                    style="cursor: pointer"
                  />
                  <label class="form-check-label"></label>
                </div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  aria-hidden="true"
                  role="img"
                  class="iconify iconify--mdi"
                  width="20"
                  height="20"
                  preserveAspectRatio="xMidYMid meet"
                  viewBox="0 0 24 24"
                >
                  <path
                    fill="currentColor"
                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"
                  ></path>
                </svg>
              </div>
              <div class="sidebar-toggler x">
                <a href="#" class="sidebar-hide d-xl-none d-block"
                  ><i class="bi bi-x bi-middle"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menu</li>

              <li class="sidebar-item">
                <a href="<?=$utils->Url("/dashboard");?>" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Nuevo Chat</span>
                </a>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-stack"></i>
                  <span>Chat Recientes</span>
                </a>

                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="component-accordion.html" class="submenu-link"
                      >Accordion</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-alert.html" class="submenu-link"
                      >Alert</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-badge.html" class="submenu-link"
                      >Badge</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-breadcrumb.html" class="submenu-link"
                      >Breadcrumb</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-button.html" class="submenu-link"
                      >Button</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-card.html" class="submenu-link">Card</a>
                  </li>

                  <li class="submenu-item">
                    <a href="component-carousel.html" class="submenu-link"
                      >Carousel</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-collapse.html" class="submenu-link"
                      >Collapse</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-dropdown.html" class="submenu-link"
                      >Dropdown</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-list-group.html" class="submenu-link"
                      >List Group</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-modal.html" class="submenu-link"
                      >Modal</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-navs.html" class="submenu-link">Navs</a>
                  </li>

                  <li class="submenu-item">
                    <a href="component-pagination.html" class="submenu-link"
                      >Pagination</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-progress.html" class="submenu-link"
                      >Progress</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-spinner.html" class="submenu-link"
                      >Spinner</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-toasts.html" class="submenu-link"
                      >Toasts</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="component-tooltip.html" class="submenu-link"
                      >Tooltip</a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>ChatIA</h3>
                <p class="text-subtitle text-muted">
                  Our take on a chat conversation.
                </p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav
                  aria-label="breadcrumb"
                  class="breadcrumb-header float-start float-lg-end"
                >
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="<?=$utils->Url("/dashboard");?>">Dashboard</a>
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
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="media d-flex align-items-center">
                      <div class="avatar me-3">
                        <img
                          src="./assets/compiled/jpg/1.jpg"
                          alt=""
                          srcset=""
                        />
                        <span class="avatar-status bg-success"></span>
                      </div>
                      <div class="name flex-grow-1">
                        <h6 class="mb-0">Bot</h6>
                        <span class="text-xs">Online</span>
                      </div>
                      <button class="btn btn-sm">
                        <i data-feather="x"></i>
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
                    <div
                      class="message-form d-flex flex-direction-column align-items-center"
                    >
                      <a href="http://" class="black"
                        ><i data-feather="smile"></i
                      ></a>
                      <div class="d-flex flex-grow-1 ms-4">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type your message.."
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2023 &copy; Mazer</p>
            </div>
            <div class="float-end">
              <p>
                Crafted with
                <span class="text-danger"
                  ><i class="bi bi-heart-fill icon-mid"></i
                ></span>
                by <a href="https://saugi.me">Saugi</a>
              </p>
            </div>
          </div>
        </footer>
      </div>
    </div>