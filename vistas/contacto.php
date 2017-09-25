<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<header>
        <ul class="nav pull-left">
        <li class="cerrar">Cerrar</li>
            <li><a href="../index.php">INICIO</a></li>

            <li><a href="">SERVICIOS <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul>
                    <li><a href="material.php">Material Eléctrico</a></li>
                    <li><a href="telefonia.php">Télefonia</a></li>
                    <li><a href="computacion.php">Computación</a></li>
                    <li><a href="instalaciones.php">Instalaciones Eléctricas</a></li>
                </ul>
            </li>

            <li><a href="nosotros.php">ACERCA DE</a></li>
            <li><a id="select" href="contacto.php">CONTACTO</a></li>
        </ul>

        <figure class="logo pull-right">
            <img src="../img/nova.png" class="img-responsive" alt="NOVA">
        </figure>

        <div class="menu-op">
          <i class="fa fa-bars fa-2x abrir" aria-hidden="true"></i>
        </div>
    </header>


    <div class=" seccion4">
    <p class="textc">Escribenos tus comentario, dudas o preguntas, estamos para servirte.</p>
    <div class="inner contact">
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" onSubmit="return false">
                            <!-- Left Inputs -->
                            <div class="col-xs-12 col-sm-6 col-md-6 wow animated slideInLeft" data-wow-delay=".5s">
                                <!-- Name -->
                                <input type="text" name="name" id="txtNOMBRE" required="required" class="form" placeholder="Nombre completo" />
                                <!-- Email -->
                                <input type="email" name="mail" id="txtCORREO" required="required" class="form" placeholder="Correo electronico" />
                                <!-- Subject -->
                                <input type="tel" name="subject" id="txtTELEFONO" required="required" class="form" placeholder="Teléfono" />
                            </div><!-- End Left Inputs -->
                            <!-- Right Inputs -->
                            <div class="col-xs-12 col-sm-6 col-md-6 wow animated slideInRight" data-wow-delay=".5s">
                                <!-- Message -->
                                <textarea name="message" id="txtCOMENTARIO" class="form textarea"  placeholder="Comentario" required="required"></textarea>
                            </div><!-- End Right Inputs -->

                            
                            <!-- Bottom Submit -->
                            <div class="relative fullwidth col-xs-12">
                            <div class="col-md-12" id="_AJAX_PRE_" ></div>
                                <!-- Send Button -->
                                <button type="submit" id="submit" name="submit" class="form-btn" onclick="sendCORREO()">ENVIAR MENSAJE</button> 
                            </div><!-- End Bottom Submit -->
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>
        
                        <!-- Your Mail Message -->
                        <!-- <div class="mail-message-area">
                            
                            <div class="alert gray-bg mail-message not-visible-message">
                                <strong>Thank You !</strong> Your email has been delivered.
                            </div>
                        </div> -->
        
                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner --></div>
<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
<script src="../js/menu.js"></script>
</body>
</html>
