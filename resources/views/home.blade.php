<!DOCTYPE html>
<html lang="en" dir="ltr" ng-app="app">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/estilos.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
  </head>
  <body>
    <div class="" ng-controller="ctrl">
      <nav class="navbar navbar-expand-lg fixed-top" id="navbar"><!-- bg-light, navbar-light-->
          <img src="{{asset('images/DESOFAM_LOGO.png')}}" height="40" alt="Logo de DESOFAM">
          <a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Contacto</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Acerca de
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#nosotros">¿Quiénes somos?</a>
                  <a class="dropdown-item" href="#mision">Misión</a>
                  <!--<div class="dropdown-divider">Visión</div>-->
                  <a class="dropdown-item" href="#vision">Visión</a>
                  <a class="dropdown-item" href="#pFrecuentes">Preguntas frecuentes</a>
                </div>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>-->
            </ul>
          </div>
        </nav>

        <div class="bd-example w-100" style="margin:0 auto;">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <!--<div class="carousel-item active">
                <img src="{{asset('images/4.png')}}" class="d-block w-100" alt="Proyecto chido">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Primer proyecto chido</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>-->
              </div>
              <div class="carousel-item active">
                <img src="{{asset('images/1.jpg')}}" class="d-block w-100" alt="Segundo proyecto chido" style="height: 700px;">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Segundo proyecto chido</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>
          </div>
          </div>

      <!--<div class="bgimg-1">
        <div class="caption">
          <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Bienvenide</span>
        </div>
      </div>-->

      <!--<div class="bgimg-2" id="pFrecuentes">

      </div>-->

      <!--<div style="position: relative;height:1000px;background-color:red;font-size:36px">
  Scroll Up and Down this page to see the parallax scrolling effect.
  This div is just here to enable scrolling.
  Tip: Try to remove the background-attachment property to remove the scrolling effect.
  </div>-->

  <div class="texto" id="nosotros">
    <h3>¿Quiénes somos?</h3>
    <p>Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
  </div>

  <div class="bgimg-2" id="mision">
    <div class="caption">
      <span class="border" style="background-color:transparent;font-size:25px;color: black;">Misión</span>
    </div>
  </div>

  <div class="bgimg-2 d-flex justify-content-center">
    <div class="texto">
      <p>Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
    </div>
  </div>




  <div class="bgimg-2" id="vision">
    <div class="caption">
      <span class="border" style="background-color:transparent;font-size:25px;color: black;">Visión</span>
    </div>
  </div>

  <div class="texto">
    <p>Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
  </div>

  <div class="bgimg-2" id="pFrecuentes">
    <div class="caption">
      <span class="border" style="background-color:transparent;font-size:25px;color: black;">Preguntas frecuentes</span>
    </div>
  </div>

  <div class="texto">
    <p>1. Nascetur per nec posuere turpis
      <br>
      2. lectus nec libero turpis nunc at
      <br>
      3.sed posuere mollis ullamcorper libero ante lectus
      <br>4. blandit pellentesque a, magna turpis est sapien duis blandit dignissim.
      <br>5. Viverra interdum mi magna mi, morbi sociis.
      <br>6. Condimentum dui ipsum consequat morbi, curabitur aliquam pede
      <br>7. nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor,
      <br>8. nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
  </div>

  <div class="bgimg-2" id="portfolio">
    <div class="caption">
      <span class="border" style="background-color:transparent;font-size:25px;color: black;">Portfolio</span>
    </div>
  </div>

  <div class="bgimg-2" id="portfolio">
  <!--<div class="bd-example w-75" style="margin:0 auto;">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('images/4.png')}}" class="d-block w-100" alt="Proyecto chido">
          <div class="carousel-caption d-none d-md-block">
            <h5>Primer proyecto chido</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/2.jpg')}}" class="d-block w-100" alt="Segundo proyecto chido" style="max-height: 424px;">
          <div class="carousel-caption d-none d-md-block">
            <h5>Segundo proyecto chido</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>
    </div>-->
    </div>

    <div class="bgimg-2" id="portfolio" style="min-height:110px;"></div>
    <!--<a href="#">Más información</a>-->

    <!--<div class="bgimg-1"></div>-->

    <!-- Footer -->
  <footer class="page-footer font-small bg-dark text-light pt-4" id="footer">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-5 mt-md-0 mt-3">
          <!-- Content -->
          <h5 class="text-uppercase"><label for="">Contáctanos</label></h5>
          <!--<p>Here you can use rows and columns here to organize your footer content.</p>-->
          <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Nombre</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nombre">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Correo electrónico</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="correo@ejemplo.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Exprésanos tu duda o inconveniente</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" ng-click="showTicket = !showTicket">
            <label class="form-check-label" for="exampleCheck1">Tengo un número de ticket</label>
            </div>
            <div ng-show="showTicket">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="número de ticket">
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none pb-3">
        <!-- Grid column -->
        <div class="col-md-2 mb-md-0 mb-3">
            <!-- Links -->
            <!--<h5 class="text-uppercase">Mapa del sitio</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#!">Preguntas frecuentes</a>
              </li>
              <li>
                <a href="#!">Asistencia personalizada</a>
              </li>
              <li>
                <a href="#!">¿Quiénes somos?</a>
              </li>
              <li>
                <a href="#!">Misión</a>
              </li>
              <li>
                <a href="#!">Visión</a>
              </li>
            </ul>-->
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">
            <h5><label for="">Estamos ubicados en</label></h5>
            <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.393704331668!2d-106.37647878548654!3d23.26513998483075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869f53930ee12159%3A0xf9610cdfe8f5ff62!2sUniversidad+Polit%C3%A9cnica+de+Sinaloa!5e0!3m2!1ses-419!2smx!4v1551654834921" width="480" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      <label for="">© 2018 Copyright</label>
      <a href="#">Desofam</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

      <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
    </div>
    <script type="text/javascript" src="{{asset('/js/angular.js')}}"></script>
  </body>
</html>
<script type="text/javascript">
  var app = angular.module('app', []);
  app.controller('ctrl', function($scope, $http, $location){

  });
</script>
