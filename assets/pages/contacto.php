<in?php

include "../../models/enviar-mail.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos y Noticias</title>
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap-5.3.3/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/stylecontacto.css">
</head>
<body>
        <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="../../index.php">
                <img class="logonodo" src="../img/logoNodofoot.png" alt="Nodo tecnológico SDE">
              </a>
              <button onclick="ocultarTexto()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../../index.php">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./news.php">NOTICIAS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./autoridades.php">DIRECTIVOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="./contacto.php">CONTACTO</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>

        <main class="containerContacto">
            <div class="mailbox">
              <form action="../../models/enviar-mail.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>

                <label for="email">Email:</label>
                <input type="email" name="email" required>

                <label for="asunto">Asunto:</label>
                <input type="text" name="asunto" required></input>

                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" cols="15" rows="5"></textarea>

                <button type="submit">Enviar Mail</button>
              </form>
            </div>
        </main>

        <footer class="main_foot">
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
                    <a href="../../index.php">
                        <img src="../img/logoNodofoot.png" alt="Nodo Tecnológico">
                    </a>
                </div>
              </div>
        </footer>
        <div class="go-top-container">
          <div class="go-top-button">
            <i class="fas fa-chevron-up"></i>
          </div>
        </div>
    <script src="../js/bootstrap-5.3.3/bootstrap.bundle.js"></script>
    <script src="../js/script-goToTop.js"></script>
    <script src="../js/script-hideText.js"></script>
</body>
</html>