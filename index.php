<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nodo Tecnológico - SDE</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-5.3.3/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styleindex.css">
    <link rel="stylesheet" href="./assets/css/styleindexMQ.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="./index.php">
                <img class="logonodo" src="./assets/img/logoNodofoot.png" alt="Nodo tecnológico SDE">
              </a>
              <button onclick="ocultarTexto()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./assets/pages/news.php">NOTICIAS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./assets/pages/autoridades.php">DIRECTIVOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./assets/pages/contacto.php">CONTACTO</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="carousel">
            <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="5000">
                    <img src="./assets/img/emprendedores2.jpg" class="d-block w-100" alt="Sala de Emprendedores">
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="./assets/img/nodo_exterior.jpg" class="d-block w-100" alt="Logo NODO exterior">
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="./assets/img/diseño.jpg" class="d-block w-100" alt="Sala de Diseño">
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="./assets/img/entrada_pilares2.jpg" class="d-block w-100" alt="Entrada principal interior">
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="./assets/img/slogan_plantas.jpg" class="d-block w-100" alt="Slogan puerta interior">
                  </div>
                </div>  
            </div>
            <div class="textConteiner">
                <div class="primerTitulo">
                    <div class="primerPalabra con">CONECTANDO</div>
                    <div class="segundaPalabra men">MENTES</div>
                </div>
                <div class="segundoTitulo">
                    <div class="primerPalabra cre">CREANDO</div>
                    <div class="segundaPalabra fut">FUTURO</div>
                </div>
                <div class="botonesInicio">
                    <a href="#con"><button type="button" class="btn btn-outline-light">Eventos</button></a>
                    <a href="#entidades"><button type="button" class="btn btn-outline-light">Entidades</button></a>
                </div>
            </div>
          </div>
    </header>
    <main>
        <section id="eventosNoticias">
            <div class="conteinerNoticias" id="con">
                <h2>EVENTOS</h2>
                <hr>
                <p>Conozca todos los eventos que se llevan a cabo en el nodo tecnológico.</p>
                <div class="cajasEventos">
                    <div class="wrapper">
                      <i id="left" class="fa-solid fa-angle-left"></i>
                      <ul class="slideNews">
                        <a href="#">
                        <li class="card">
                          <div class="img"><img src="./assets/img/blank-post.png" alt="img" draggable="false"></div>
                          <h2>Evento 1</h2>
                          <span>xx/xx/xx</span>
                        </li>
                        </a>
                        <a href="#">
                        <li class="card">
                          <div class="img"><img src="./assets/img/blank-post.png" alt="img" draggable="false"></div>
                          <h2>Evento 2</h2>
                          <span>xx/xx/xx</span>
                        </li>
                        </a>
                        <a href="#">
                        <li class="card">
                          <div class="img"><img src="./assets/img/blank-post.png" alt="img" draggable="false"></div>
                          <h2>Evento 3</h2>
                          <span>xx/xx/xx</span>
                        </li>
                       </a>
                       <a href="#">
                        <li class="card">
                          <div class="img"><img src="./assets/img/blank-post.png" alt="img" draggable="false"></div>
                          <h2>Evento 4</h2>
                          <span>xx/xx/xx</span>
                        </li>
                        </a>
                        <a href="#">
                        <li class="card">
                          <div class="img"><img src="./assets/img/blank-post.png" alt="img" draggable="false"></div>
                          <h2>Evento 5</h2>
                          <span>xx/xx/xx</span>
                        </li>
                        </a>
                        <a href="#">
                        <li class="card">
                          <div class="img"><img src="./assets/img/blank-post.png" alt="img" draggable="false"></div>
                          <h2>Evento 6</h2>
                          <span>xx/xx/xx</span>
                        </li>
                       </a>
                      </ul>
                      <i id="right" class="fa-solid fa-angle-right"></i>
                    </div>
                  </div>
                <a href="./assets/pages/news.php">
                  <button type="button" class="btn btn-light">VER MÁS</button>
                </a>
            </div>
        </section>
        <section id="entidades">
            <div class="conteinerEntidades">
            <h2>ENTIDADES</h2>
            <hr>
            <div class="cajasEntidades">
                <a href="https://www.afip.gob.ar/moa/" target="_blank">
                    <div class="entidadesItem adu">
                        <div class="img_foot">
                            <img src="./assets/img/afip_logo.png" alt="AFIP Aduana">
                        </div>
                    </div>
                </a>
                <a href="https://www.inti.gob.ar/areas/asistencia-regional/noa/santiago-del-estero" target="_blank">
                    <div class="entidadesItem inti">
                        <div class="img_foot logointi">
                            <img src="./assets/img/inti_logo.png" alt="I.N.T.I.">
                        </div>
                    </div>
                </a>
                <a href="#" target="_blank">
                    <div class="entidadesItem ene">
                        <div class="img_foot">
                            <img src="./assets/img/logo_sapem.png" alt="ENERSE SAPEM">
                        </div>
                    </div>
                </a>
                <a href="http://turnos.sde.gob.ar/secitec/" target="_blank">
                    <div class="entidadesItem secre">
                        <div class="img_foot">
                            <img src="./assets/img/logo_secretaria.png" alt="Secretaría de desarrollo">
                        </div>
                    </div>
                </a>
            </div>
        </section>
      </div>
    </main>
    <footer class="main_foot">
      <div class="bg">
      <div class="info">
        <div class="comoLlegar">
          <h2>¿Donde Estamos?</h2>
          <p>Av. Los Molinos - La Banda, Parque Indrustrial</p>
          <h3>Medios de transporte:</h3>
          <h4>Tren al Desarrollo</h4>
          <p>Salida: Estación principal (FORUM - SDE)</p>
          <p>Llegada: Estacion del Nodo Tecnológico</p>
          <h4>Colectivos:</h4>
          <p>Línea 21 "Agua y Energía"</p>
          <p>Línea 17</p>
        </div>
        <div class="direccion">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3530.670116995403!2d-64.2621371245308!3d-27.75831917615339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x943b53cc97f9d267%3A0x9d6028c42070faf7!2sNodo%20Tecnol%C3%B3gico!5e0!3m2!1ses-419!2sar!4v1716390091620!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div id="autoridades">
      <div class="containerAutoridades">
        <h2>AUTORIDADES</h2>
        <div class="nombreCargo">
        <div class="autoridad">
            <h3>Secretario de Ciencia y Tecnología</h3>
            <h4>Ing. Adrián Omar Suárez</h4>
            <a href="mailto:adriansuarez@sde.gob.ar?Subject=Consulta%20desde%20la%20página%20NODOSDE">
              adriansuarez@sde.gob.ar
            </a>
          </div>
          <div class="autoridad">
            <h3>Director de Ciencia y Tecnología</h3>
            <h4>Ing. Edmundo Vizgarra Gómez</h4>
            <a href="mailto:edmundovizgarra@sde.gob.ar?Subject=Consulta%20desde%20la%20página%20NODOSDE">
              edmundovizgarra@sde.gob.ar
            </a>
          </div>
          <div class="autoridad">
            <h3>Director de Gestión Pública</h3>
            <h4>Sr. Ricardo Montenegro</h4>
            <a href="mailto:ricardomontenegro@sde.gob.ar?Subject=Consulta%20desde%20la%20página%20NODOSDE">
              ricardomontenegro@sde.gob.ar
            </a>
          </div>
          <div class="autoridad">
            <h3>Directora de Administración</h3>
            <h4>CPN María Dell Aringa</h4>
            <a href="mailto:mdellaringa@sde.gob.ar?Subject=Consulta%20desde%20la%20página%20NODOSDE">
              mdellaringa@sde.gob.ar
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="infoRedes">
      <div class="contacto">
        <div class="redes">
            <h4>¿Ya nos sigues?</h4>
            <div class="iconos">
                <a href="https://www.youtube.com/channel/UC_TbbfZoz_sv1EW-fVt8Q2g" target="_blank">
                    <div class="ico yt"></div>
                </a>
                <a href="https://x.com/NodoTecSDE" target="_blank">
                    <div class="ico x"></div>
                </a>
                <a href="https://www.facebook.com/Nodotecnologicosde/?fref=ts" target="_blank">
                <div class="ico fb"></div>
                </a>
                <a href="mailto:informes@nodosde.com"></a>
            </div>
        </div>
        </div>
        <div class="logo_foot">
          <a href="./index.php">
            <img src="./assets/img/logoNodofoot.png" alt="Nodo Tecnológico">
          </a>
        </div>
    </div>
    </footer>
    <div class="go-top-container">
      <div class="go-top-button">
        <i class="fas fa-chevron-up"></i>
      </div>
    </div>
    <script src="./assets/js/bootstrap-5.3.3/bootstrap.bundle.js"></script>
    <script src="./assets/js/script-carouselEvent.js" defer></script>
    <script src="./assets/js/script-goToTop.js"></script>
    <script src="./assets/js/script-hideText.js"></script>
</body>
</html>