<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<header>
        <ul class="nav pull-left">
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
    </header>


    <div class=" seccion4">
    <p class="textc">Escribenos tus comentario, dudas o preguntas, estamos para servirte.</p>
    <div class="inner contact">
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" method="post" action="#">
                            <!-- Left Inputs -->
                            <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                                <!-- Name -->
                                <input type="text" name="name" id="name" required="required" class="form" placeholder="Nombre completo" />
                                <!-- Email -->
                                <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Correo electronico" />
                                <!-- Subject -->
                                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Teléfono" />
                            </div><!-- End Left Inputs -->
                            <!-- Right Inputs -->
                            <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                                <!-- Message -->
                                <textarea name="message" id="message" class="form textarea"  placeholder="Comentario"></textarea>
                            </div><!-- End Right Inputs -->
                            <!-- Bottom Submit -->
                            <div class="relative fullwidth col-xs-12">
                                <!-- Send Button -->
                                <button type="submit" id="submit" name="submit" class="form-btn semibold">ENVIAR MENSAJE</button> 
                            </div><!-- End Bottom Submit -->
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>
        
                        <!-- Your Mail Message -->
                        <div class="mail-message-area">
                            <!-- Message -->
                            <div class="alert gray-bg mail-message not-visible-message">
                                <strong>Thank You !</strong> Your email has been delivered.
                            </div>
                        </div>
        
                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner --></div>
<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>
