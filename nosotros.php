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
            <li><a href="http://localhost/asonaema" class="activo enlace_inicio">INICIO</a></li>
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
            <li><a href="http://localhost/asonaema" class="activo enlace_inicio"><span class="icon_movil fa fa-home"></span> INICIO</a></li>
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



    <div class="banner_nosotros">
        <div class="cover_banner_nosotros">
        </div>
    </div>
    <div class="valores_mision_vision_container">
        <h2 class="nosotros_main_title">Nosotros</h2>

        <div class="sub_container_valor_mision_vision" id="sub_container_valor_mision_vision">
            <div class="mision" id="mision">
                <img src="img/mission.svg" class="mision_img" alt="">
                <h2 class="mision_title">Misión</h2>
                <p class="mision_text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ratione corrupti. Vero, praesentium. 
                    Molestias quis consectetur debitis earum dicta? Blanditiis architecto quidem unde numquam dolorum. Explicabo, 
                    ipsam! Similique odio hic temporibus, deserunt ipsum quibusdam expedita tempore adipisci!
                </p>
            </div>
            <div class="valores" id="valores">
                <img src="img/value.svg" class="valores_img" alt="">
                <h2 class="valores_title">Valores</h2>
                <ul class="lista_valores">
                    <li><span class="number_item_valor">1</span> Lorem ipsum dolor sit amet.</li>
                    <li><span class="number_item_valor">2</span>Lorem ipsum dolor sit amet.</li>
                    <li><span class="number_item_valor">3</span>Lorem ipsum dolor sit amet.</li>
                    <li><span class="number_item_valor">4</span>Lorem ipsum dolor sit amet.</li>
                    <li><span class="number_item_valor">5</span>Lorem ipsum dolor sit amet.</li>
                </ul>
            </div>
            <div class="vision" id="vision">
                <img src="img/vision.svg" class="vision_img" alt="">
                <h2 class="vision_title">Visión</h2>
                <p class="vision_text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ratione corrupti. Vero, praesentium. 
                    Molestias quis consectetur debitis earum dicta? Blanditiis architecto quidem unde numquam dolorum. Explicabo, 
                    ipsam! Similique odio hic temporibus, deserunt ipsum quibusdam expedita tempore adipisci!
                </p>
            </div>
        </div>
    </div>

    <div class="organigrama_container">
        <h1 class="organigrama_title">Nuestro organigrama</h1>
        <img src="img/organigrama.jpg" alt="">
    </div>


    <div class="quienes">
        <div class="info_quienes">
            <h3 class="quienes_title">Que es ASONAEMA?</h3>
            <p class="quienes_text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, placeat autem mollitia nesciunt facilis 
                quae expedita numquam voluptatum doloribus iusto unde. Laboriosam nisi quod nihil. Similique neque libero nemo 
                adipisci dolor laboriosam quae aliquam cum illum minima veritatis, voluptates nobis eligendi distinctio, 
                obcaecati, ipsam a repellat! Corrupti facere veritatis nisi?
            </p>
            <button class="quienes_btn"> Más información <i class="fas fa-arrow-right"></i></button>
        </div>
        <div class="img_quienes">
            <img src="img/quienes_img.jpg" alt="">
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
                <li><a href="http://localhost/asonaema" class="activo enlace_inicio">INICIO</a></li>
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