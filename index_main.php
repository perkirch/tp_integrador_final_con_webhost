

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
          <a
            href="https://www.ole.com.ar/seleccion/scaloni-anos-seleccion-argentina-datos-cifras-numeros_0_WhPgAmxOTL.html"><button
              type="button" class="btn btn-outline-dark btn-sm">Conocé más</button></a>
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
        <a
        href="https://www.ole.com.ar/seleccion/scaloni-anos-seleccion-argentina-datos-cifras-numeros_0_WhPgAmxOTL.html"><button type="button" class="btn btn-secondary btn-sm">Conocé más</button></a>
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
    
    <form action="datos.php" method="get" >

      <div  class="row margin-bottom">
        <div class="col-6">
          <input type="text" class="form-control"name="nombre" placeholder="Nombre">
        </div>
        <div class="col-6">
          <input type="text" class="form-control"name="apellido" placeholder="Apellido">
        </div>
      </div>
      <div class="row">
        <div class="col">
        <input type="email" class="form-control"name="correo" placeholder="Correo">
      </div>
    </div>
      <textarea id="margin_textarea" name="comentario" placeholder="Por qué querés participar?" id="" cols="30" rows="10"
        style="width: 500px;" required></textarea>
      <h3 class="h3_form">Recordá incluir a quién querés conocer</h3>
      <div class="enviar">
        <a id="boton_enviar" href="">Enviar</a>
      </div>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </form>

  </div>
</div>
<h1>INPUT DE PRUEBA SWEET ALERT</h1>
<input type="submit" value="sweetalert" onclick="return sweet()">



