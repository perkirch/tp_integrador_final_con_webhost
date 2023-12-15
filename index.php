<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP integrador</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Css -->
  <link rel="stylesheet" href="estilos.css">
</head>

<body>
  <header>
    <!-- <div class="container-fluid">
      <div class="row">
  
        <div class="col-12"> -->
    <!-- Inicio navbar bootstrap -->
    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul id="padding_nav" class="navbar-nav ms-auto">
            <li class="nav-item">
              <img src="./imagenes/logo afa.png" width="45px" alt="">
            </li>
            <li class="nav-item padding_afa">
              <a class="nav-link active" aria-current="page" href="#">Asociación del Fútbol Argentino</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Comprar tickets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Formulario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-disabled="true">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->
    <!-- fin navbar bootstrap -->
    <!-- </div>
      
      </div>
    </div> -->

    <!-- Whatsapp -->
    <!-- <div id="whatsapp">
      <a href="https://www.whatsapp.com/">
          <img src="./imagenes/Logo Whatsapp.png" width=35px alt="Whatsapp">
      </a>
      <h3 id="chatea">Chateá con nosotros!</h3>
  </div> -->

    <div class="contenedorNav">

      <div class="contenedorNav1">
        <img src="./imagenes/logo afa.png" width="45px" alt="">
        <a class="nav-link active" aria-current="page" href="#">Asociación del Fútbol Argentino</a>
      </div>

      <div class="contenedorNav2">
        <a id="inicio" href="./index.php">Los partidos</a>
        <a href="#figuras">Las figuras</a>
        <a href="#participa" target="_self">Participá</a>
        <a href="#estadio" target="_self">El estadio</a>
        <a id="tickets" href="./tickets.html" target="_blank">Comprar tickets </a>
        <a href="#abajo" target="_self">Ir abajo</a>
      </div>
    </div>


    <!-- inicio carrusel -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="./imagenes/carrusel 3.avif" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block color_divs2">
            <h5>Argentina vs Paraguay - 12 de Octubre</h5>
            <p>No te pierdas la oportunidad de ver a la Selección. Comprá ya las entradas!</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="./imagenes/carrusel 4.avif" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block color_divs2">
            <h5>Perú vs Argentina - 17 de Octubre</h5>
            <p>También podés comprar las entradas para el partido con Perú en Lima!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./imagenes/carrusel 2.avif" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block color_divs2">
            <h5>El capitán se recupera de la lesión</h5>
            <p>Jugaría unos minutos antes de viajar para Argentina!</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- fin carrusel bootstrap -->
  </header>

  <main>
    <a name="figuras"></a>
    <section>
      <div class="container-fluid ">
        <div class="row">
          <div class="col-4">
          </div>
          <div class="col-4 div_centrar">
            <h2 class="h2_menor">CONOCÉ A LAS</h2>
            <h2>FIGURAS</h2>
          </div>
          <div class="col-4">
          </div>
        </div>
      </div>

      <div class="contenedor_tarjetas ">

        <div class="card" style="width: 13rem;">
          <img src="./imagenes/messi2.png" class="card-img-top" alt="...">
          <div class="card-body ">
            <a class="a_campeon" href="">Campeón</a>
            <a class="a_puesto">Mediapunta</a>

            <h5 class="card-title">Lionel Messi</h5>
            <p class="card-text parrafo_tarjeta">Nuestro Messías es reconocido por muchos como el mejor futbolista y uno de los mejores
              deportistas de todos los tiempos, ha ganado 43 títulos colectivos y más de 50 títulos individuales en su
              carrera. Es el jugador con más "Balones de Oro" y uno de los pocos en ganar una medalla de oro en los juegos
              olímpicos y un Mundial. </p>
            <button type="button" class="btn btn-outline-dark btn-sm">Conocé más</button>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
          </div>
        </div>

        <div class="card" style="width: 13rem;">
          <img src="./imagenes/sacaloni2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <a class="a_campeon" href="">Campeón</a>
            <a class="a_puesto">Entrenador</a>
            <h5 class="card-title">Lionel Scaloni</h5>
            <p class="card-text parrafo_tarjeta">El DT campeón del mundo está de fiesta. Sí, porque este martes 16 de
              octubre, Lionel Scaloni celebra sus 45 años de vida. Y entre los millones y millones de saludos de todo el
              planeta futbolero, nos sumamos brindándole un pequeño tributo. Te vamos a contar 45 datitos referidos al
              oriundo de Pujato. A continuación, el repaso.</p>
            <button type="button" class="btn btn-outline-dark btn-sm">Conocé más</button>
          </div>
        </div>

        <div class="card" style="width: 13rem;">
          <img src="./imagenes/montiel2.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <a class="a_campeon" href="">Campeón</a>
            <a class="a_puesto">Lateral</a>
            <h5 class="card-title">Gonzalo Montiel</h5>
            <p class="card-text parrafo_tarjeta">El mundo habla sobre Gonzalo Montiel, el jugador tocado por la varita y que
              parece estar destinado para hacer historia. Luego de definir la final del Mundial con la selección argentina
              en la tanda de penales, el defensor convirtió el penal que le dio la Europa League al Sevilla. Recordamos su
              increíble historia de sacrificio, que hoy está disfrutando.</p>
            <a href="https://www.ole.com.ar/seleccion/scaloni-anos-seleccion-argentina-datos-cifras-numeros_0_WhPgAmxOTL.html"><button type="button" class="btn btn-outline-dark btn-sm">Conocé más</button></a>
          </div>
        </div>

      </div>

    </section>

    <section>
      <a name="estadio"></a>
      <div class="contenedor_columnas">
        <div class="columna1">
        </div>
        <div class="columna2">
          <h3 id="monu">Estadio Monumental - Preparado para Octubre!</h3>
          <p class="parrafo_columna">En estos días si sigue avanzando con la colocación de las nuevas butacas en la platea San Martín Alta, la instalación de los soportes para las butacas en Sívori y Centenario Alta y la unificación de las tribunas superiores del Monumental que respode al objetivo de contar con una circulación de 360° en el estadio. Con estas últimas modificaciones, sumadas a la construcción de los palcos en la Sívori Media, finalizarán la remodelación del estadio más grande de Sudamérica, seguido por el Monumental de Lima (80.093 espectadores) y el Maracaná (78.838), y el segundo a nivel clubes a nivel mundial, detrás del Camp Nou de Barcelona (99.354).</p>
          <a href="https://www.ole.com.ar/seleccion/scaloni-anos-seleccion-argentina-datos-cifras-numeros_0_WhPgAmxOTL.html"><button type="button" class="btn btn-secondary btn-sm">Conocé más</button></a>
        </div>
      </div>

    </section>
    <a name="participa"></a>
    <div class="container-fluid ">
      <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4 div_centrar">
          <h2 class="h2_menor">VENIR A VER A LAS</h2>
          <h2>FIGURAS</h2>
        </div>
        <div class="col-4">
        </div>
      </div>
      <!-- <div class="row">
      <div class="col-1">
      </div>
      <div class="col-2">
      </div>
      <div class="col-6 div_centrar">
        <h3 id="h2_menor2">Dejanos tu nombre, apellido y contanos por qué querés participar!</h3>
    </div>
      <div class="col-2">
      </div>
      <div class="col-1">
      </div>
    </div>
  </div> -->
      <div class="div_centrar">
        <h3 id="h2_menor2">Dejanos tu nombre, apellido y contanos por qué querés participar!</h3>
      </div>
      <div class="contenedor_formulario1">
        <div class="contenedor_formulario2">

          <form action="./insert.php" method="post" target="_blank">

            <div class="row margin-bottom">
              <div class="col-6">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
              </div>
              <div class="col-6">
                <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
              </div>
            </div>
            <div class="row margin-bottom"">
              <div class=" col">
              <input type="email" class="form-control" name="correo" placeholder="Mail" required>
            </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" name="figura" placeholder="Escribí la figura que querés conocer" required>
          </div>
        </div>
        <textarea id="margin_textarea" name="comentario" placeholder="Por qué querés participar?" id="" cols="30" rows="10" style="width: 500px;" required></textarea>
        <h3 class="h3_form">Recordá incluir a quién querés conocer</h3>
        <!-- <div class="enviar">
              <a id="boton_enviar" href="">Enviar</a>
            </div> -->
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
        </form>

      </div>
    </div>




    <footer>

     
      <div class="contenedor_footer">
        
        <div class=" div1">
          <h2 class="h2_footer">Preguntas</h2>
          <h2 class="h2_footer">frecuentes</h2>
        </div>
        <div class="div2">
          <h2 class="h2_footer">Contáctanos</h2>
        </div>
        <div class=" div3">
          <h2 class="h2_footer">Prensa</h2>
        </div>
        <div class="div4">
          <h2 class="h2_footer">Próximos </h2>
          <h2 class="h2_footer">partidos</h2>
        </div>
        <div class="div5">
          <h2 class="h2_footer">Términos y </h2>
          <h2 class="h2_footer">condiciones</h2>
        </div>
        <div class=" div6">
          <h2 class="h2_footer">Privacidad</h2>
        </div>
        <div class="div7">
          <h2 class="h2_footer">Figuras</h2>
        </div>

      </div>

      <a name="abajo"></a>



    </footer>




    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Javascript -->
    <script src="./javascript/script.js"></script>

</body>

</html>