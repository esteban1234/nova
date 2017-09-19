<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<header>
    <div class="menu pull-left">
        <ul>
            <a href="../index.php">INICIO</a>
            <a href="nosotros.php">NOSOTROS</a>
            <a href="servicios.php">SERVICIOS</a>
            <a id="select" href="contacto.php">CONTACTO</a>
        </ul>
    </div>

    <figure class="logo pull-right">
        <img src="../img/mazeru.png" alt="" class="img-responsive">
    </figure>
</header>

		<section id="contact" style="">
            <div class="container">
                <div class="row">
                    <div class="about_our_company" style="margin-bottom: 20px;">
                        <h1 style="color:#fff;">Formulario de contacto</h1>
                        <div class="titleline-icon"></div>
                        <p style="color:#fff;">Escribenos tus comentario, dudas o preguntas, estamos para servirte.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-8">
                        <form name="sentMessage" id="contactForm" novalidate="" onSubmit="return false">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Escribe tu nombre completo *" id="txtNOMBRE" data-validation-required-message="Por favor escribe tu nombre.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Escribe tu correo *" id="txtCORREO" data-validation-required-message="Por favor escribe tu correo.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Escribe tu numero telefónico *" id="txtTELEFONO" data-validation-required-message="Por favor escribe tu numero telefónico.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Escribe tu comentario*" id="txtCOMENTARIO" data-validation-required-message="Por favor escribe tu comentario."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div id="_AJAX_PRE_"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl get" onclick="sendCORREO()">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 col-md-4 contacto-information">
                        <p style="color:#fff;">
                            <strong><i class="fa fa-map-marker"></i> Dirección</strong><br>
                            Av. Homero #229 por Francisco Petrarca y Taine. Col. Polanco V Sección. Miguel Hidalgo, México. C.P. 11560.
                        </p>
                        <p style="color:#fff;"><strong><i class="fa fa-phone"></i> Telefóno</strong><br>
                            Pendiente</p>
                        <p style="color:#fff;">
                            <strong><i class="fa fa-envelope"></i>  Correo</strong><br>
                            info@mazeru.net</p>
                            <p style="color:#fff;">
                            <strong><i class="fa fa-clock-o"></i>  Horario</strong><br>
                            Lunes a Viernes de 9am a 6pm</p>
                        <!-- <p></p> -->
                    </div>
                </div>
            </div>
        </section>

<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>
