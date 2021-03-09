<?php

    $url = $_GET['url'];
    $url_producto = explode("/", $url);
    $nombre_producto = $url_producto[2];

    require_once 'model/conexion.php';    
    
    $resul_producto = $db -> Query("SELECT * FROM productos INNER JOIN vendedores ON productos.id_vend = vendedores.id_vend  WHERE id_prod = '".$nombre_producto."'");
    $array_resul_producto = [];
    
    while($row = mysqli_fetch_array($resul_producto)){
        $array_resul_producto['id_prod'] = $row['id_prod'];
        $array_resul_producto['nombre_prod'] = $row['nombre_prod'];
        $array_resul_producto['descripcion_prod'] = $row['descripcion_prod'];
        $array_resul_producto['precio_prod'] = $row['precio_prod'];
        $array_resul_producto['fecha_public_prod'] = $row['fecha_public_prod'];
        $array_resul_producto['img_prod'] = $row['img_prod'];
        $array_resul_producto['id_vend'] = $row['id_vend'];
        $array_resul_producto['nombre_vend'] = $row['nombre_vend'];
        $array_resul_producto['apellido_vend'] = $row['apellido_vend'];  
        $array_resul_producto['correo_vend'] = $row['correo_vend'];
        $array_resul_producto['numero_ws'] = $row['numero_ws'];   
        $array_resul_producto['logo_marca'] = $row['logo_marca'];      
        
    } 

    $resul_producto_vend = $db  -> Query("SELECT * FROM `productos` INNER JOIN vendedores ON productos.id_vend = vendedores.id_vend WHERE productos.id_vend = ".$array_resul_producto['id_vend']." AND `id_prod` != '".$array_resul_producto['id_prod']."' LIMIT 10");
    $productos_vend = "";

    while($row = mysqli_fetch_array($resul_producto_vend)){
        $productos_vend .= "<a href='http://localhost/asonaema/tienda/producto/".$row['id_prod']."'>";
        $productos_vend .= "<div class='carousel_tienda_home_elemento carousel_vend_recomendados'>";
        $productos_vend .= "<div class='header_img_card'>";
        $productos_vend .= "<img src='".$row['img_prod']."' loading='lazy' class='carousel_tienda_home_img' alt=''>";
        $productos_vend .= "</div>";
        $productos_vend .= "<div class='body_elemento_tienda_home'>";
        $productos_vend .= "<h3 class='elemento_tienda_home_title' title='".$row['nombre_prod']."'>".$row['nombre_prod']."</h3>";
        $productos_vend .= "<p class='elemento_tienda_home_text'>".$row['descripcion_prod']."</p>";
        $productos_vend .= "<div class='container_vendedor_y_precio'>";
        $productos_vend .= "<img src='".$row['logo_marca']."' loading='lazy' alt=''>";
        $productos_vend .= "<span class='precio_producto'>RD $".$row['precio_prod']."</span>";
        $productos_vend .= "</div>";
        $productos_vend .= "</div>";
        $productos_vend .= "</div>";    
        $productos_vend .= "</a>"; 

    }
    
    if(empty($array_resul_producto)){
        header("location: http://localhost/asonaema/404.php");
    }


?>
<!DOCTYPE html>
 <html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,600,700|Montserrat:400,700,900|Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link rel="stylesheet" href="http://localhost/asonaema/css/main.css">
    <link rel="stylesheet" href="http://localhost/asonaema/css/responsive.css">
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
            <img src="http://localhost/asonaema/img/cancel_icon.svg" loading='lazy' class="cerrar_busqueda" alt="">
        </div>
        <div class="resultado_busqueda">
            <h3 class="alerta_no_funciona"> <i class="fa fa-exclamation-triangle"></i> El buscador no esta listo todavia estamos trabando en ello.</h3>
        </div>
    </div>



    
    <div class="container_producto">

        <div class="sub_container_producto">
            <div class="info_producto">
                <div class="indicador_ruta_producto">
                    <span class="indicador_ruta_enlace"><a href="https://web-asonaema.000webhostapp.com/tienda">Tienda </a> <span> / Producto  </span><span>/ 60255b8635111</span></span>
                </div>
                <h1 class="title_producto"><?php echo($array_resul_producto['nombre_prod']);?></h1>
                <p class="descripcion_producto">
                   <?php echo($array_resul_producto['descripcion_prod']); ?>
                </p>
                <span class="precio_producto_pagina_producto">RD $<?php echo($array_resul_producto['precio_prod']);?></span>
    
                <a href="<?php echo("https://wa.me/18492052221?text=Hola, estoy interesado en este producto: http://localhost/asonaema/".$url);?>" target="_blank" class="btn_contactar_vendedor">Contactar el vendedor <i class="fab fa-whatsapp"></i></a>

                <div class="container_redes_sociales_vendedor">
                    <p class="redes_sociales_vendedor"><span>Encuentra más en: </span> <i class="fab fa-facebook-f"></i> <i class="fab fa-instagram"></i></p>
                </div>

                <!-- <div class="img_vendedor_producto">
                    <img src="http://localhost/asonaema/img/logo_vendedor4.jpeg" alt="">
                    <p class="nombre_vendedor">Nombre vendedor</p>
                </div> -->
    
            </div>
            <div class="img_producto">
                <div class="container_img_producto">
                    <img src="<?php echo($array_resul_producto['img_prod']);?>" loading="lazy" alt="">
                </div>
            </div>
        </div>
        



        </div>

        
        
        <div class="wraper_carousel_info_vendedor">
            <div class="container_carousel_producto_recomendado_producto">
                <div class="carousel_producto_recomendado_producto" id="carousel_producto_recomendado_producto">
                    <h2 class="carousel_tienda_home_title">Más publicaciones del vendedor</h2>
                    <div class="carousel_tienda_home_contenedor">
                        <button aria-label="anterior" class="carousel_tienda_home_anterior carousel_producto_recomendado_producto_anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button aria-label="siguiente" class="carousel_tienda_home_siguiente carousel_producto_recomendado_producto_siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>
            
                        <div class="carousel_producto_recomendado_producto_lista">

                            <?php echo($productos_vend);?>                        
            
                        </div>
            
                </div>
            </div>


        </div>
        <div class="info_vendedor">
            <div class="container_img_info_vendedor">
                <img src="<?php echo($array_resul_producto['logo_marca']);?>" alt="" class="logo_vendedor">
                <h3 class="nombre_vendedor_info_vendedor"><?php echo($array_resul_producto['nombre_vend']." ".$array_resul_producto['apellido_vend']);?></h3>
            </div>
            <div class="contact_btns_social_media page_productos">
                <a href="#" class="btn_facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn_instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn_twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn_google_plus"><i class="fab fa-google-plus"></i></a>

            </div>
            <h3 class="info_vendedor_correo"><i class="fas fa-envelope"></i> <?php echo($array_resul_producto['correo_vend']);?></h3>

            <h3 class="info_vendedor_direccion"><i class="fas fa-map-marker-alt"></i> Santo Domingo Norte, Sabana Perdida, Los altos de los cerros, C/ 7th, #56</h3>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="http://localhost/asonaema/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="http://localhost/asonaema/js/carousel.config.js"></script>
    
</body>
</html>