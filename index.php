<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Inicio</title>
    <!--Estilos-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/main.css" />
    <!--Scripts-->
    <script
      src="https://kit.fontawesome.com/78e29a3f0a.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- ***************************************INICIO HEADER*********************************************** -->
    <nav class="navbar fixed-top position-absolute navbar-inverse lg navbar-dark p-md-3 pt-4"><!--contenedor nav-->

      <div class="brand pt-4"> <!--contenedor del logo-->
        <img class="pt-2" src="./assets/img/logo.webp" alt="" width="40%" />
      </div>

      <div class="container-fluid flex-row-reverse justify-content-end" style="z-index: 99"><!--contenedor del logo-->
        
        <button 
          class="navbar-toggler collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          
          <span class="toggler-icon top-bar"></span>
          <span class="toggler-icon middle-bar"></span>
          <span class="toggler-icon bottom-bar"></span>
        </button><!--menu hamburguesa-->

        <div class="collapse navbar-collapse m-2" id="navbarSupportedContent"><!--contenedor del menu desplegable-->
          <div class="container-menu col-md-2" style="background: black; border-radius:20px;"> 
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-2">
            <!--Elementos de la navbar-->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://www.youtube.com/">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com/">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com/">Anuario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com/">Pagina principal</a>
              </li>

            </ul>
          </div>
        </div>
    </nav>

    <!-- ***************************************FIN HEADER*********************************************** -->

    <!-- ***************************************INICIO CONTENIDO*********************************************** -->

    <div class="bgimg-1"><!--img parallax-->
      <div class="caption"><!--caja del texto-->
        <span class="border"><h1 class="ml16">Bienvenido a la expo técnica</h1></span>
      </div>
    </div>

    <!--<div class="bg-light">
      <h3>Titulo</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur,
        quidem ex! Soluta a magni eum quo architecto debitis facilis quae. Quas
        fuga a corporis soluta libero, aut officia vel voluptate!
      </p>
    </div>-->

    <div id="contenidoParallax">
      <div
        class="container"
        style="margin: auto; text-align: center"
        id="containerParallax"
      >
        <br />
       

        <h2 class='mb-4' style='letter-spacing: 2px;'>Sobre la expo</h2>

        <div
          id="textoParallax"
          style="width: 100% !important"
          class="col-md-10 col-md-offset-1"
        >
        <br>
          <p class='fs-4'>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus magnam, et ullam dolorum incidunt atque rerum at itaque. Fugit veniam modi quae quasi dolores! Praesentium, modi. Ad placeat reprehenderit ut.
          </p>
        <br>
        </div>
      </div>
    </div>


    <div class="bgimg-2"></div>
    <div id="contenidoParallax">
      <div
        class="container"
        style="margin: auto; text-align: center"
        id="containerParallax"
      >
        <br />
       

        <h2 class='mb-4' style='letter-spacing: 2px;'>Sobre la expo</h2>

        <div
          id="textoParallax"
          style="width: 100% !important"
          class="col-md-10 col-md-offset-1"
        >
        <br>
          <p class='fs-4'>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus magnam, et ullam dolorum incidunt atque rerum at itaque. Fugit veniam modi quae quasi dolores! Praesentium, modi. Ad placeat reprehenderit ut.
          </p>
        <br>
        </div>
      </div>
    </div>

    <!--<div style="position: relative">
      <div class="bg-dark">
        <h3 class="light-text">Passion in Paris!</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, illum.
          Saepe sed, quasi aliquid fugit dignissimos dolores expedita dolore
          repellendus voluptas deserunt eos maiores repellat placeat voluptatem
          sapiente esse maxime.
        </p>
      </div>
    </div>-->

    <div class="bgimg-3">
      <div class="caption">
        <span class="border">TEXTO EJEMPLO</span>
      </div>
    </div>

    <!--<div style="position: relative">
      <div class="bg-dark">
        <h3 class="light-text">Moscow Never Sleeps!</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam hic
          eum consequuntur iste, molestiae facere odit ipsum. Quos magnam
          nostrum culpa rem consequatur dolor beatae nemo soluta alias. Iste,
          nihil!
        </p>
      </div>
    </div>-->

    <div class="bgimg-1">
      <div class="caption">
        <span class="border">TEXTO EJEMPLO</span>
      </div>
    </div>

    <!-- ***************************************FIN CONTENIDO*********************************************** -->
    <footer class="center footer">
      &copy; 2022 | All rights Reserved
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script><!--lib. animacion-->
    <script src="./js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  </body>
</html>
