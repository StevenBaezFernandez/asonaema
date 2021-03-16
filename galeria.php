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


    <div class="indicador_ruta galeria">
        <span class="indicador_ruta_enlace"><a href="http://localhost/asonaema/">inicio</a> <span>/galeria</span></span>
        <h1 class='title_categoria_product'>Galeria de imagenes</h1>
    </div>

    <div class="contenedor_imgs">

        <div class="imgs_sub">
            <img src="http://localhost/asonaema/img/galeria/img2.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img3.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img4.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img5.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img6.jpg" loading="lazy" alt="">
        </div>
        
        <div class="imgs_sub">
            <img src="http://localhost/asonaema/img/galeria/img7.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img8.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img9.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img11.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img12.jpg" loading="lazy" alt="">
        </div>
        
        <div class="imgs_sub">
            <img src="http://localhost/asonaema/img/galeria/img10.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img13.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img1.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img14.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img15.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img16.jpg" loading="lazy" alt="">
            <img src="http://localhost/asonaema/img/galeria/img17.jpg" loading="lazy" alt="">
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

    <?php
        require_once 'footer.php';
    ?>

    <script src="js/main.js"></script>
    
</body>
</html>