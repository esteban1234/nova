
<?php include 'vistas/encabezado.php' ?>
<body>
    <header>
        <ul class="nav pull-left">
            <li class="cerrar">Cerrar</li>
            <li><a id="select" href="index.php">INICIO</a></li>

            <li><a href="">SERVICIOS <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul>
                    <li><a href="vistas/material.php">Material Eléctrico</a></li>
                    <li><a href="vistas/telefonia.php">Télefonia</a></li>
                    <li><a href="vistas/computacion.php">Computación</a></li>
                    <li><a href="vistas/instalaciones.php">Instalaciones Eléctricas</a></li>
                </ul>
            </li>

            <li><a href="vistas/nosotros.php">ACERCA DE</a></li>
            <li><a href="vistas/contacto.php">CONTACTO</a></li>
        </ul>

        <figure class="logo pull-right">
            <img src="img/nova.png" class="img-responsive" alt="NOVA">
        </figure>

        <div class="menu-op">
          <i class="fa fa-bars fa-2x abrir" aria-hidden="true"></i>
        </div>
    </header>

    <div class="jumbotron bordered">
<div class="container">
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-sm-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-7 col-md-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel" data-ride="carousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner bordered">
                                        <div class="item active" data-slide-number="0">
                                        <img src="img/01.jpg">
                                        <!-- <img src="img/uno.jpg" class="img-responsive"> -->
                                        </div>

                                        <div class="item" data-slide-number="1">
                                        <img src="img/02.jpg"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="img/03.jpg"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="img/04.jpg"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a>
                                </div>
                            </div>

                            <div class="col-sm-5 col-md-4" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h3 class="myshadow">Comercio de equipo y material eléctrico</h3> <br>
                                    <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> -->
                                    <p class="sub-text"> <a href="#" class="btn btn-color"><i class="fa fa-plus" aria-hidden="true"></i> INFO</a></p>
                                </div>

                                <div id="slide-content-1">
                                    <h3 class="myshadow">Comercio de teléfonos, aparatos de comunicación, refaccciones y accesorios</h3><br>
                                    <!-- <p>Lorem Ipsum Dolor</p> -->
                                    <p class="sub-text"> <a href="#" class="btn btn-color"><i class="fa fa-plus" aria-hidden="true"></i> INFO</a></p>
                                </div>

                                <div id="slide-content-2">
                                    <h3 class="myshadow">Comercio de equipo y accesorios de cómputo</h3><br>
                                    <!-- <p>Lorem Ipsum Dolor</p> -->
                                    <p class="sub-text"> <a href="#" class="btn btn-color"><i class="fa fa-plus" aria-hidden="true"></i> INFO</a></p>
                                </div>

                                <div id="slide-content-3">
                                    <h2 class="myshadow">Instalaciones eléctricas en construcciones</h2><br>
                                    <!-- <p>Lorem Ipsum Dolor</p> -->
                                    <p class="sub-text"> <a href="#" class="btn btn-color"><i class="fa fa-plus" aria-hidden="true"></i> INFO</a></p>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>

        </div>
</div>
</div>

<div class="section seccion1">
    <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4 cont-index">
            <div class="iconos">
                <span class="fa-stack fa-5x icono">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-users fa-stack-1x"></i>
                </span>
            </div>
            <h2 class="text-center text-muted tit-index">EXPERIENCIA</h2>
            <p class="text-center p-index">Desde hace ya muchos años prestando Servicios Eléctricos a las Empresas y representando las Mejores Marcas del Mundo participando en el mercado.</p>
          </div>
          <div class="col-sm-4 col-md-4 cont-index">
            <div class="iconos">
                <span class="fa-stack fa-5x icono">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-truck fa-stack-1x"></i>
                </span>
            </div>
            <h2 class="text-center text-muted tit-index">MERCADOS</h2>
            <p class="text-center p-index">Nuestros productos y servicios abaracan una amplica variedad de mercados como Minería, Generación, Distribución, Transmisión, Empresas de Ingeniería, Contratistas, Petrolera, etc.</p>
          </div>
          <div class="col-sm-4 col-md-4 cont-index">
            <div class="iconos">
                <span class="fa-stack fa-5x icono">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-cubes fa-stack-1x"></i>
                </span>
            </div>
            <h2 class="text-center text-muted tit-index">PRODUCTOS</h2>
            <p class="text-center p-index">Junto a nuestra amplia gama de productos, entregamos servicios que cumplen con los más altos estándares de calidad.</p>
          </div>
        </div>
    </div>
</div>

    <div class="section seccion2">
      <div class="container">
        <div class="row centrar-uno">
        <h1 class="text-center h1-pd" style="color: #fff; font-family: 'Oleo Script', cursive;">Productos destacados</h1>
        <p class="text-center p-pd" style="color: #fff; font-family: 'Cambay', sans-serif;">de nuestra amplia gama de productos de ámbito eléctrico</p> <br><br>
          <div class="col-md-3 uno">
            <div class="imagen1">
                
            </div>
            <div class="tit">
                <h3 class="text-center ">CONDUCTORES</h3>
            </div>
          </div>
          <div class="col-md-3 uno">
            <div class="imagen2">
                
            </div>
            <div class="tit">
                <h3 class="text-center ">APAGADORES</h3>
            </div>
          </div>
          <div class="col-md-3 uno">
            <div class="imagen3">
                
            </div>
            <div class="tit">
                <h3 class="text-center ">NO-BREAK</h3>
            </div>
          </div>
          <div class="col-md-3 uno">
            <div class="imagen4">
                
            </div>
            <div class="tit">
                <h3 class="text-center ">TRANSFORMADORES</h3>
            </div>
          </div>
        </div>
        <div style="text-align: center; margin-top: 5%; color: #fff;">
          <a class="btn btn-default btn-outline btn-lg" data-scroll href="vistas/contacto.php">CONTACTANOS</a>
        </div>
      </div>
    </div>


<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'vistas/pie.php' ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/slide.js"></script>
<script src="js/botonarriba.js"></script>
<script src="js/menu.js"></script>
</body>
</html>
