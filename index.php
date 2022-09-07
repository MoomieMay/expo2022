<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Inicio</title>
    <!--Estilos-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/main.css" />
    <!--Scripts-->
    <script src="https://kit.fontawesome.com/78e29a3f0a.js" crossorigin="anonymous"></script>
    <link href='https://css.gg/menu.css' rel='stylesheet'>
  </head>
  <body>
    <!-- ***************************************INICIO NAVEGACION*********************************************** -->
    
    <div id="mySidebar" class="sidebar" style='z-index: 12;'>
        <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</a>
          
          <div class="img-brand d-flex justify-content-center" style='width: 100%;'>
            <img src="./assets/img/logo2.webp" alt="" class="img-fluid" width='250px'>
          </div>

          <div class="item-sidebar border-bottom border-1 border-dark p-4">
            <a href="" class="nav-item-sidebar">Inicio</a>
          </div>
        
          <div class="item-sidebar border-bottom border-1 border-dark p-4">
            <a href="" class="nav-item-sidebar">Galeria</a>
          </div>
          
          <div class="item-sidebar border-bottom border-1 border-dark p-4">
            <a href="" class="nav-item-sidebar">Anuario</a> 
          </div>
          
          <div class="item-sidebar border-bottom border-1 border-dark p-4 ">
            <a href="" class="nav-item-sidebar">Pagina principal</a>
          </div>
    </div>

    <nav style='position:absolute;' class='p-4'>
      <div class="container-menu" style='position:relative; z-index: 10;'>
        <button class="openbtn p-4" onclick="openSidebar()" style='position:absolute; border: none; text-align: center;  height: 7px; background-color:transparent;'><i class="gg-menu"></i></button>
      </div>
    </nav>


    <!-- ***************************************FIN NAVEGACION*********************************************** -->

    <!-- ***************************************INICIO CONTENIDO*********************************************** -->

    <!--parallax 1-->
    <div id='bg-parallax' class="bgimg-1 bg-parallax bg-parallax-normal"><!--img parallax-->
      <div class="img d-flex justify-content-center " style='position: absolute; width: 100%;'>
          <img src="./assets/img/logo2.webp" alt="" class="img-fluid" width='250px'>
      </div>
      <div class="caption"><!--caja del texto-->
        <span class="border"><h1 class="ml16">Bienvenido a la expo técnica</h1></span>
      </div>
    </div>

    <div id="contenidoParallax">
      <div class="container" style="margin: auto; text-align: center" id="containerParallax">
        <br/>
        <h2 class='mb-4' style='letter-spacing: 2px;'>Sobre la expo</h2>
        <div id="textoParallax" style="width: 100% !important" class="col-md-10 col-md-offset-1">
          <br>
            <p class='fs-4'>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus magnam, et ullam dolorum incidunt atque rerum at itaque. Fugit veniam modi quae quasi dolores! Praesentium, modi. Ad placeat reprehenderit ut.
            </p>
          <br>
        </div>
      </div>
    </div>

    <!--parallax 2-->
    <div id='bg-parallax'  class="bgimg-2 bg-parallax bg-parallax-normal"></div>
    
    <div id="contenidoParallax">
      <div class="container" style="margin: auto; text-align: center" id="containerParallax">
        <br/>
        
        <h2 class='mb-4' style='letter-spacing: 2px;'>Sobre la expo</h2>

        <div id="textoParallax" style="width: 100% !important" class="col-md-10 col-md-offset-1">
          <br>
            <p class='fs-4'>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus magnam, et ullam dolorum incidunt atque rerum at itaque. Fugit veniam modi quae quasi dolores! Praesentium, modi. Ad placeat reprehenderit ut.
            </p>
          <br>
        </div>
      </div>
    </div>

    <!--parallax 3-->
    <div id='bg-parallax' class="bgimg-3 bg-parallax bg-parallax-normal"></div>
    
    <div id="contenidoParallax">
      <div class="container" style="margin: auto; text-align: center" id="containerParallax">
        <br/>

        <h2 class='mb-4' style='letter-spacing: 2px;'>Sobre la expo</h2>

        <div id="textoParallax" style="width: 100% !important" class="col-md-10 col-md-offset-1">
        <br>
          <p class='fs-4'>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus magnam, et ullam dolorum incidunt atque rerum at itaque. Fugit veniam modi quae quasi dolores! Praesentium, modi. Ad placeat reprehenderit ut.
          </p>
        <br>
        </div>
      </div>
    </div>

    <!--parallax 4-->
    <div id='bg-parallaxzd' class="bgimg-1 bg-parallax bg-parallax-normal">
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
