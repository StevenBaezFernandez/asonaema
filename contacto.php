<!DOCTYPE html>
 <html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,600,700|Montserrat:400,700,900|Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="shortcut icon" href="http://localhost/asonaema/img/logo_prueba.svg" type="image/x-icon">
    <title>Home - proctos para el pelo</title>
</head>
<body>
    <?php
        require_once 'header.php';
    ?>
    <div class="menu_scroll">
        <ul class="menu scroll">
            <li><a href="/asonaema" class="activo enlace_inicio">INICIO</a></li>
            <li class=" activo enlace_produsctos"><a href="tienda">PRODUCTOS</a></li>
            <li class="enlace_sobre_nosotros"><a href="nosotros" >SOBRE NOSOTROS</a></li>
            <li class="enlace_galeria"><a href="galeria">GALERIA</a></li>
            <li class="enlace_galeria"><a href="contacto">CONTACTO</a></li>
            
        </ul>
    </div>
    <div class="menu_movil">
        <div class="header_menu_movil">
            <h3>Menu</h3>
            <button id="btn_hide_movil" role="button">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <ul class="menu movil">
            <li><a href="/asonaema" class="activo enlace_inicio"><span class="icon_movil fa fa-home"></span> INICIO</a></li>
            <li class=" activo enlace_produsctos"><a href="tienda"><span class="icon_movil fa fa-box"></span> PRODUCTOS</a></li>
            <li class="enlace_sobre_nosotros"><a href="nosotros" ><span class="icon_movil fa fa-users"></span> SOBRE NOSOTROS</a></li>
            <li class="enlace_galeria"><a href="galeria"><span class="icon_movil fa fa-image"></span> GALERIA</a></li>
            <li class="enlace_galeria"><a href="contacto"><span class="icon_movil fa fa-envelope"></span> CONTACTO</a></li>
            
        </ul>
    </div>
    <div class="panel_busqueda">
        <div class="cuadro_busqueda">
            <input type="text" placeholder="Buscar..." class="input_busqueda" id="input_busqueda">
            <img src="img/cancel_icon.svg" class="cerrar_busqueda" alt="">
        </div>
        <div class="resultado_busqueda">
            <h3 class="alerta_no_funciona"> <i class="fa fa-exclamation-triangle"></i> El buscador no esta listo todavia estamos trabando en ello.</h3>
        </div>
    </div>


    <div class="paralax_contact">
        <h2 class="paralax_contact_title">Formulario de contactos</h2>
        <p class="paralax_contact_text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores atque, quae ipsa cupiditate recusandae dicta itaque.
        </p>
        <div class="mensaje_respuesta"><p>Mensaje enviado correctamente!</p><i class="fas fa-times"></i></div>
    </div>

    <div class="form_contact_container">
        <div class="info_social_media">
            <h3 class="info_social_media_title">No dudes en escribirnos o seguirnos en los siguientes enlaces a nuestas redes sociales:</h3>
            <p class="show_email"><i class="fas fa-envelope"></i> Contacto@asonaema.com</p>
            <div class="contact_btns_social_media">
                <a href="#" class="btn_facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn_instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn_twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn_google_plus"><i class="fab fa-google-plus"></i></a>

            </div>
        </div>
        <div class="form_contact">
            <h3 class="form_contact_title">Contáctanos</h3>
            <p class="form_contact_text">Los campos marcados con <span class="campo_requerido">*</span> son obligatorios</p>
            <form id="contacto_form">
                <label for="nombre">Nombres <span class="campo_requerido">*</span></label>
                <div class="input_group_contact">
                    <i class="fas fa-check-circle fa-check-circle_nombre "></i>
                    <i class="fas fa-times-circle fa-times-circle_nombre"></i>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                </div>
                <label for="correo">Correo electronico <span class="campo_requerido">*</span></label>
                <div class="input_group_contact">
                    <i class="fas fa-check-circle fa-check-circle_correo"></i>
                    <i class="fas fa-times-circle fa-times-circle_correo"></i>
                    <input type="email" name="correo" id="correo" placeholder="Correo electronico" required>
                </div>
                <label for="motivo">Elige un motivo <span class="campo_requerido">*</span></label>
                <div class="input_group_contact">
                    <select name="motivo" id="motivo" required>
                        <option value="duda" selected>Alguna duda</option>
                        <option value="formar parte">Formar parte de nosotros</option>
                        <option value="compra">Compra</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                <label for="mensaje">Escribe tu mensaje aqui <span class="campo_requerido">*</span></label>
                <div class="input_group_contact">
                    <i class="fas fa-check-circle fa-check-circle_mensaje"></i>
                    <i class="fas fa-times-circle fa-times-circle_mensaje"></i>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje" required></textarea>
                </div>
                <div class="contenedor_btn_loading">
                    <button type="submit" class="form_btn_send" id="form_btn_send">Enviar <i class="fas fa-paper-plane"></i></button>
                    <p class="mensaje_error_form">Todos los campos deben estar correctos</p>
                    <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
                </div>
            </form>
        </div>
    </div>

    <div class="overlay">
        <div class="main_newsletter">
            <div class="header_news">
                <h3>Suscribete</h3>
                <p>¡Para estar al tanto de todos nuestros productos!</p>
            </div>
            <div class="body_news">
                <form action="">
                    <input type="text" name="correo_electonico" placeholder="Correo electronico">
                    <input type="submit" value="Suscribirse" role="button">
                </form>
            </div>
        </div>
    </div>







                            
    <div class="blanco">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
        <p class="cargando">Cargando la página</p>
    </div>

    <button role="button" class="btn_ir_arriba"><i class="fas fa-angle-up"></i></button>

    <footer class="pie_pagina">
        <div class="cuerpo">

            <div class="newsletter">
                <h2>Lorem, ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="news">
                    <div class="input_group">
                        <i class="fa fa-envelope"></i>
                        <input type="text" placeholder="Digita tu correo">
                    </div>
                </div>
                <button role="button">Suscribete</button>
            </div>
            
            <div class="contenedor_social">
                <ul>                
                    
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                            <span>Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                            <span>Tiwtter</span>
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>809-456-4565</span>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <span>laura.contacto@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
            
        </div>
        <div class="pie">
            <ul class="menu foot">
                <li><a href="/asonaema" class="activo enlace_inicio">INICIO</a></li>
                <li class=" activo enlace_produsctos"><a href="tienda">PRODUCTOS</a></li>
                <li class="enlace_sobre_nosotros"><a href="nosotros" >SOBRE NOSOTROS</a></li>
                <li class="enlace_galeria"><a href="galeria">GALERIA</a></li>
                <li class="enlace_contacto"><a href="contacto">CONTACTO</a></li>
            </ul>
            <p>© Steven báez fernández - 2020</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
    
</body>
</html>