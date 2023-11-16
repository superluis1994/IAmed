
   <!-- Navbar Start -->
   <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="text-primary m-0">IA<span class="text-dark">med</span></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="#body" class="nav-item nav-link active ">Inicio</a>
                        <a href="#servicios" class="nav-item nav-link">Servicios</a>
                        <a href="#comunidad" class="nav-item nav-link">Comunidad Médica</a>
                        <a href="<?= $utils->url('/servicios') ?>" class="nav-item nav-link">Afiliados</a>
                        <a href="<?= $utils->url('/contacto') ?>" class="nav-item nav-link">Contactos</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                    <a href="<?= $utils->url('/login') ?>" class="nav-item nav-link">Iniciar Sesión</a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?=$utils->assets('img/carrusel2.jpg')?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white animated slideInRight mb-3">Acceso Inmediato a Profesionales de la Salud</h1>
                                    <p class="mb-5 animated slideInRight">Descubre cómo IAmed te conecta con profesionales de la salud en segundos. Tu bienestar, a un clic de distancia.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="carousel-item">
                    <img class="w-100" src="<?=$utils->assets('img/carrusel.jpg')?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Prediagnósticos Médicos con Inteligencia Artificial</h1>
                                    <p class="mb-5 animated slideInLeft">Explora cómo la inteligencia artificial está revolucionando la medicina, mejorando diagnósticos y tratamientos. El futuro de la salud ya está aquí.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?=$utils->assets('img/carrusel5.jpg')?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Recordatorios Médicos y Citas con Profesionales</h1>
                                    <p class="mb-5 animated slideInRight">Nunca más olvides una cita médica o una dosis de medicamento. IAmed te mantiene al tanto de tu salud.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
    <!-- final del caruosel -->
    
    <div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 pt-lg-5">
                    <div class="bg-white p-5 mt-lg-5">
                        <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">Regístrate y Unete a Nuestra Comunidad</h1>
                        <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">Te invitamos a unirte a nuestra comunidad de médicos, pacientes y entusiastas de la salud. Juntos, trabajamos para transformar la experiencia de atención médica
                             y promover la colaboración en el campo de la medicina. Si compartes nuestra visión de un mundo donde la tecnología y la atención médica se unen para el bienestar de todos, ¡te animamos a registrarte y ser parte de esta emocionante transformación!</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-person-plus text-dark"></i>
                                </div>
                                <h5 class="mb-3">Únete como Profesional en la Salud</h5>
                                
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-check-all text-dark"></i>
                                </div>
                                <h5 class="mb-3">Forma Parte de Nuestros Pacientes</h5>
                                
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.5s" href="<?=$utils->url("/registrar");?>">Regístrate</a>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="align-items-end">
                        <br><br><br><br>
                        <div class="col-12" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <iframe width="800" height="400" src="https://www.youtube.com/embed/sj8MGPfmp8o" title="IA med" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"allowfullscreeen></iframe>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-primary p-5">
                                <div class="experience mb-4" data-wow-delay="0.5s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Pacientes Atendidos</span>
                                        <span class="text-white">545</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="experience mb-4 wow fadeIn" data-wow-delay="0.4s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Profesionales Registrados</span>
                                        <span class="text-white">48</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="experience mb-0 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Prediagnósticos con IA</span>
                                        <span class="text-white">312</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Service Start -->
    <div class="container-fluid container-service py-5" id="servicios">
        <div class="container pt-5" >
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Funciones Principales de IAmed</h1>
                <p class="mb-5">Explora las numerosas funcionalidades de IAmed que mejoran tu experiencia médica y te ayudan a cuidar de tu salud de manera eficiente y personalizada.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-search text-dark"></i>
                        </div>
                        <h5 class="mb-3">Búsqueda de Médicos</h4>
                            <p class="mb-4">Encuentra pérfiles de médicos y especialistas cercanos de forma rápida y fácil.</p>
                        <a class="btn btn-light px-3" href="">Leer Más<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-wifi text-dark"></i>
                        </div>
                        <h5 class="mb-3">Consultas en Línea</h4>
                            <p class="mb-4">Realiza consultas médicas virtuales con expertos y especialistas en la salud.</p>
                        <a class="btn btn-light px-3" href="">Leer Más<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-bell text-dark"></i>
                        </div>
                        <h5 class="mb-3">Recordatorios</h4>
                            <p class="mb-4">Recibe alertas para tomar medicamentos y asistir a tus citas.</p>
                        <a class="btn btn-light px-3" href="">Leer Más<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-file-medical text-dark"></i>
                        </div>
                        <h5 class="mb-3">Historial Médico Digital</h4>
                            <p class="mb-4">Almacena y accede a tu historial médico de forma rápida en caso de emergencias.</p>
                        <a class="btn btn-light px-3" href="">Leer Más<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
              
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-clipboard2-pulse text-dark"></i>
                        </div>
                        <h5 class="mb-3">Control de Síntomas</h4>
                            <p class="mb-4">Sigue y regístra la evolución de tus síntomas de manera sencilla y eficaz.</p>
                        <a class="btn btn-light px-3" href="">Leer Más<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-heart-pulse text-dark"></i>
                        </div>
                        <h5 class="mb-3">Educación en Salud</h4>
                            <p class="mb-4">Accede a recursos informativos sobre tu salud y condiciones médicas.</p>
                        <a class="btn btn-light px-3" href="">Leer Más<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-heart-pulse text-dark"></i>
                        </div>
                        <h5 class="mb-3">Educación en Salud</h4>
                            <p class="mb-4">Accede a recursos informativos sobre tu salud y condiciones médicas.</p>
                        <a class="btn btn-light px-3" href="">Leer Más<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-heart-pulse text-dark"></i>
                        </div>
                        <h5 class="mb-3">Educación en Salud</h4>
                            <p class="mb-4">Accede a recursos informativos sobre tu salud y condiciones médicas.</p>
                        <a class="btn btn-light px-3" href="">Leer Más<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Appoinment Start -->

    <!-- Team Start -->
    <div class="container-fluid container-team py-5" id="comunidad">
        <div class="container pb-5" >
            <div class="row g-5 align-items-center mb-5" >
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid w-100" src="<?=$utils->assets('img/team-1.jpg')?>" alt="">
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-3">Dr. Andrés Fernández</h1>
                    <p class="mb-1">Nutricionista</p>
                    <p class="mb-5">Santa Ana, El Salvador</p>
                    <h3 class="mb-3">Biografía</h3>
                    <p class="mb-4">Profesional de la salud especializado en la nutrición y la dieta. Diseña planes alimenticios personalizados, brinda educación nutricional y trabaja en colaboración con otros especialistas de la salud para mejorar la salud y el bienestar de los pacientes.</p>
                    <p class="mb-4">Su enfoque se centra en la alimentación equilibrada y la prevención de enfermedades relacionadas con la nutrición.</p>
                    <div class="d-flex">
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?=$utils->assets('img/team-2.jpg')?>" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Isabella Lopéz</h5>
                            <span>Fisioterapeuta</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?=$utils->assets('img/team-3.jpg')?>" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Alejandro Martínez</h5>
                            <span>Doctor General</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?=$utils->assets('img/team-4.jpg')?>" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Mariana Pérez</h5>
                            <span>Psicóloga</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="<?=$utils->assets('img/team-5.jpg')?>" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Carlos Gónzales</h5>
                            <span>Odontólogo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container pt-5">
            <div class="row gy-5 gx-0">
                <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-4">¡Lo que dicen los usuarios y pacientes acerca de nuestros servicios en IAmed!</h1>
                    <p class="text-white mb-5">Las opiniones de nuestros usuarios y pacientes son una prueba de la excelencia de IAmed en la atención médica.</p>
                    <a href="" class="btn btn-primary py-3 px-5">Más Testimonios</a>
                </div>
                <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white p-5">
                        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                            <div class="testimonial-item">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-chat-left-quote text-dark"></i>
                                </div>
                                <p class="fs-5 mb-4">IAmed ha sido una verdadera bendición para mi salud. Como madre y profesional, la facilidad de acceder a consultas en línea ha hecho que la atención médica de mi familia sea mucho más eficiente y conveniente.</p>
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0" src="<?=$utils->assets('img/testimonial-1.jpg')?>" alt="">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Ana Rodríguez</h5>
                                        <span class="text-primary">Profesional</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-chat-left-quote text-dark"></i>
                                </div>
                                <p class="fs-5 mb-4">Como paciente, ahora puedo comunicarme de manera efectiva con mis médicos y llevar un seguimiento detallado de mis síntomas. La facilidad de uso y la comodidad que ofrece esta plataforma son invaluables para mí.</p>
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0" src="<?=$utils->assets('img/testimonial-2.jpg')?>" alt="">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Juan Morales</h5>
                                        <span class="text-primary">Paciente</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


  