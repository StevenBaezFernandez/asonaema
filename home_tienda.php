<?php    

    require_once 'model/conexion.php';

    $resul_home_tienda = $db -> Query("SELECT * FROM `carousel_productos` INNER JOIN productos ON carousel_productos.id_prod = productos.id_prod WHERE carousel = 'home tienda'");
    $resul_capilares = $db -> Query("SELECT productos.id_prod, carousel, position, nombre_prod, descripcion_prod, precio_prod, img_prod, vendedores.nombre_marca, vendedores.logo_marca FROM carousel_productos INNER JOIN productos ON carousel_productos.id_prod = productos.id_prod INNER JOIN vendedores ON productos.id_vend = vendedores.id_vend WHERE carousel = 'capilares recomendados' ORDER BY `carousel_productos`.`position` ASC");
    $resul_piel = $db -> Query("SELECT productos.id_prod, carousel, position, nombre_prod, descripcion_prod, precio_prod, img_prod, vendedores.nombre_marca, vendedores.logo_marca FROM carousel_productos INNER JOIN productos ON carousel_productos.id_prod = productos.id_prod INNER JOIN vendedores ON productos.id_vend = vendedores.id_vend WHERE carousel = 'piel recomendados' ORDER BY `carousel_productos`.`position` ASC");
    $resul_bisuteria = $db -> Query("SELECT productos.id_prod, carousel, position, nombre_prod, descripcion_prod, precio_prod, img_prod, vendedores.nombre_marca, vendedores.logo_marca FROM carousel_productos INNER JOIN productos ON carousel_productos.id_prod = productos.id_prod INNER JOIN vendedores ON productos.id_vend = vendedores.id_vend WHERE carousel = 'bisuteria recomendados' ORDER BY `carousel_productos`.`position` ASC");
    
    $home_tienda_indicadores = "";
    $home_tienda = "";
    $capilares_recomendados = "";
    $piel_recomendados = "";
    $bisuteria_recomendados = "";
    $contador_home_tienda = 0;

    while($row = mysqli_fetch_array($resul_home_tienda)){

        if($contador_home_tienda == 0){
            $home_tienda .= "<div class='carousel-item active'>";
            $home_tienda_indicadores .= "<li data-bs-target='#carouselExampleCaptions' data-bs-slide-to='0' class='active'></li>";
        }else{
            $home_tienda .= "<div class='carousel-item'>";
            $home_tienda_indicadores .= "<li data-bs-target='#carouselExampleCaptions' data-bs-slide-to='".$contador_home_tienda."'></li>";
        }





        $home_tienda .= "<img src='https://web-asonaema.000webhostapp.com/img/bg_carousel_tienda_home.jpg' class='d-block w-100' alt='...'>";
        $home_tienda .= "<div class='carousel-caption carousel_caption_tieda_home'>";
        $home_tienda .= "<div class='caption_child caption_child1'>";
        $home_tienda .= "<h2 class='title_carousel_pruct_tienda_home'>".$row['nombre_prod']."</h2>";
        $home_tienda .= "<p class='descripcion_product_tienda_home'>".$row['descripcion_prod']."</p>";
        $home_tienda .= "<a href='https://web-asonaema.000webhostapp.com/tienda/producto/".$row['id_prod']."' class='btn_ver_producto_carousel'>Ver Producto <i class='fas fa-eye'></i></a>";
        $home_tienda .= "</div>";
        $home_tienda .= "<div class='caption_child caption_child2'>";
        $home_tienda .= "<img src='".$row['img_prod']."' alt=''>";
        $home_tienda .= "</div>";
        $home_tienda .= "</div>";
        $home_tienda .= "</div>";
        
        $contador_home_tienda +=1;
    }

    while($row = mysqli_fetch_array($resul_capilares)){
        $capilares_recomendados .= "<a href='https://web-asonaema.000webhostapp.com/tienda/producto/".$row['id_prod']."'>";
        $capilares_recomendados .= "<div class='carousel_tienda_home_elemento'>";
        $capilares_recomendados .= "<div class='header_img_card'>";
        $capilares_recomendados .= "<img src='".$row['img_prod']."' class='carousel_tienda_home_img' alt=''>";
        $capilares_recomendados .= "</div>";
        $capilares_recomendados .= "<div class='body_elemento_tienda_home'>";
        $capilares_recomendados .= "<h3 class='elemento_tienda_home_title' title='".$row['nombre_prod']."'>".$row['nombre_prod']."</h3>";
        $capilares_recomendados .= "<p class='elemento_tienda_home_text'>".$row['descripcion_prod']."</p>";
        $capilares_recomendados .= "<div class='container_vendedor_y_precio'>";
        $capilares_recomendados .= "<img src='".$row['logo_marca']."' alt=''>";
        $capilares_recomendados .= "<span class='precio_producto'>RD $".$row['precio_prod']."</span>";
        $capilares_recomendados .= "</div>";
        $capilares_recomendados .= "</div>";
        $capilares_recomendados .= "</div>";    
        $capilares_recomendados .= "</a>"; 
    }
    while($row = mysqli_fetch_array($resul_piel)){
        $piel_recomendados .= "<a href='https://web-asonaema.000webhostapp.com/tienda/producto/".$row['id_prod']."'>";
        $piel_recomendados .= "<div class='carousel_tienda_home_elemento'>";
        $piel_recomendados .= "<div class='header_img_card'>";
        $piel_recomendados .= "<img src='".$row['img_prod']."' class='carousel_tienda_home_img' alt=''>";
        $piel_recomendados .= "</div>";
        $piel_recomendados .= "<div class='body_elemento_tienda_home'>";
        $piel_recomendados .= "<h3 class='elemento_tienda_home_title' title='".$row['nombre_prod']."'>".$row['nombre_prod']."</h3>";
        $piel_recomendados .= "<p class='elemento_tienda_home_text'>".$row['descripcion_prod']."</p>";
        $piel_recomendados .= "<div class='container_vendedor_y_precio'>";
        $piel_recomendados .= "<img src='".$row['logo_marca']."' alt=''>";
        $piel_recomendados .= "<span class='precio_producto'>RD $".$row['precio_prod']."</span>";
        $piel_recomendados .= "</div>";
        $piel_recomendados .= "</div>";
        $piel_recomendados .= "</div>";    
        $piel_recomendados .= "</a>"; 
    }
    while($row = mysqli_fetch_array($resul_bisuteria)){
        $bisuteria_recomendados .= "<a href='https://web-asonaema.000webhostapp.com/tienda/producto/".$row['id_prod']."'>";
        $bisuteria_recomendados .= "<div class='carousel_tienda_home_elemento'>";
        $bisuteria_recomendados .= "<div class='header_img_card'>";
        $bisuteria_recomendados .= "<img src='".$row['img_prod']."' class='carousel_tienda_home_img' alt=''>";
        $bisuteria_recomendados .= "</div>";
        $bisuteria_recomendados .= "<div class='body_elemento_tienda_home'>";
        $bisuteria_recomendados .= "<h3 class='elemento_tienda_home_title' title='".$row['nombre_prod']."'>".$row['nombre_prod']."</h3>";
        $bisuteria_recomendados .= "<p class='elemento_tienda_home_text'>".$row['descripcion_prod']."</p>";
        $bisuteria_recomendados .= "<div class='container_vendedor_y_precio'>";
        $bisuteria_recomendados .= "<img src='".$row['logo_marca']."' alt=''>";
        $bisuteria_recomendados .= "<span class='precio_producto'>RD $".$row['precio_prod']."</span>";
        $bisuteria_recomendados .= "</div>";
        $bisuteria_recomendados .= "</div>";
        $bisuteria_recomendados .= "</div>";    
        $bisuteria_recomendados .= "</a>"; 
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
    <link rel="stylesheet" href="https://web-asonaema.000webhostapp.com/css/main.css">
    <link rel="stylesheet" href="https://web-asonaema.000webhostapp.com/css/responsive.css">
    <link rel="shortcut icon" href="https://web-asonaema.000webhostapp.com/img/logo_prueba.svg" type="image/x-icon">
    <title>Home - proctos para el pelo</title>
</head>
<body>
    <header class="header-father">
        <div class="header1">
            <div class="left">
                <i class="fa fa-bars btn-menu" id="btn_show_movil"></i>
                <h1>¡Puedes tener un pelo natural y sin quimicos!</h1>
            </div>
            

            <div class="menu_social">
                <div class="social">
                    <a href="#">
                        <i class="fab fa-facebook-f">
                            <span class="tooltips facebook">Facebook</span>
                        </i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram">
                            <span class="tooltips instagram">Instagram</span>
                        </i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter">
                            <span class="tooltips twitter">Twitter</span>
                        </i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google-plus">
                            <span class="tooltips google_plus">Google plus</span>
                        </i>
                    </a>
                </div>
                

                <div class="search_btn">
                    <img src="https://web-asonaema.000webhostapp.com/img/search_icon.svg" alt="button search">
                </div>
            </div>
            
        </div>
        <div class="header2">
            <a href="/asonaema" class="contenedor_img_logo">
            <img src="https://web-asonaema.000webhostapp.com/img/logo_prueba.svg" alt="logotipo">
            </a>
            
            <ul class="menu principal">
                <li><a href="http://localhost/asonaema" class="activo enlace_inicio">INICIO</a></li>
                <li class=" activo enlace_produsctos"><a href="https://web-asonaema.000webhostapp.com/tienda">PRODUCTOS</a></li>
                <li class="enlace_sobre_nosotros"><a href="https://web-asonaema.000webhostapp.com/nosotros" >SOBRE NOSOTROS</a></li>
                <li class="enlace_galeria"><a href="https://web-asonaema.000webhostapp.com/galeria">GALERIA</a></li>
                <li><a href="">MÁS <i class="fas fa-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="https://web-asonaema.000webhostapp.com/galeria" class="mas_galeria">Galeria</a></li>
                        <li><a href="https://web-asonaema.000webhostapp.com/nosotros" class="mas_sobre_nosotros">sobre nosotros</a></li>
                        <li><a href="https://web-asonaema.000webhostapp.com/tienda" class="mas_productos">productos</a></li>
                        <li><a href=""></a></li>
                    </ul>
                </li>
            </ul>
            <a href="https://web-asonaema.000webhostapp.com/contacto"><button role="button" class="btn-main"><i class="fas fa-envelope"></i> CONTACTO</button></a>
            
        </div>
    </header>
    <div class="menu_scroll">
        <ul class="menu scroll">
            <li><a href="http://localhost/asonaema" class="activo enlace_inicio">INICIO</a></li>
            <li class=" activo enlace_produsctos"><a href="https://web-asonaema.000webhostapp.com/tienda">PRODUCTOS</a></li>
            <li class="enlace_sobre_nosotros"><a href="https://web-asonaema.000webhostapp.com/nosotros" >SOBRE NOSOTROS</a></li>
            <li class="enlace_galeria"><a href="https://web-asonaema.000webhostapp.com/galeria">GALERIA</a></li>
            <li class="enlace_galeria"><a href="https://web-asonaema.000webhostapp.com/contacto">CONTACTO</a></li>
            
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
            <li class=" activo enlace_produsctos"><a href="https://web-asonaema.000webhostapp.com/tienda"><span class="icon_movil fa fa-box"></span> PRODUCTOS</a></li>
            <li class="enlace_sobre_nosotros"><a href="https://web-asonaema.000webhostapp.com/nosotros" ><span class="icon_movil fa fa-users"></span> SOBRE NOSOTROS</a></li>
            <li class="enlace_galeria"><a href="https://web-asonaema.000webhostapp.com/galeria"><span class="icon_movil fa fa-image"></span> GALERIA</a></li>
            <li class="enlace_galeria"><a href="https://web-asonaema.000webhostapp.com/contacto"><span class="icon_movil fa fa-envelope"></span> CONTACTO</a></li>
            
        </ul>
    </div>
    <div class="panel_busqueda">
        <div class="cuadro_busqueda">
            <input type="text" placeholder="Buscar..." class="input_busqueda" id="input_busqueda">
            <img src="https://web-asonaema.000webhostapp.com/img/cancel_icon.svg" class="cerrar_busqueda" alt="">
        </div>
        <div class="resultado_busqueda">
            <h3 class="alerta_no_funciona"> <i class="fa fa-exclamation-triangle"></i> El buscador no esta listo todavia estamos trabando en ello.</h3>
        </div>
    </div>


    <div class="container_carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <?php echo($home_tienda_indicadores);?>    
            </ol>
            <div class="carousel-inner">
                <?php echo($home_tienda);?>              
            </div>

            <a class="carousel-control-prev carousel_control_prev_tienda" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next carousel_control_next_tienda" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
    </div>


    <div class="container_categoria">
        <h1 class="title_categoria">Categorias</h1>
        <div class="categoria">
            <a href="tienda/categoria/capilares">
                <div class="categoria_item capilares">
                    <h2>Capilares</h2>
                </div>
            </a>
            <a href="tienda/categoria/piel">
                <div class="categoria_item piel">
                    <h2>Cuidado de la piel</h2>
                </div>
            </a>
            <a href="tienda/categoria/bisuteria">
                <div class="categoria_item bisuteria">
                    <h2>Bisuteria</h2>
                </div>
            </a>
        </div>
    </div>


    <div class="carousel_container_all_wraper">
        <div class="carousel_tienda_home" id="carousel_tienda_home1">
            <h2 class="carousel_tienda_home_title">Capilares recomendados</h2>
            <div role="tablist" class="carousel_tienda_home_indicadores carousel_tienda_home_indicadores1"></div>
            <div class="carousel_tienda_home_contenedor">
                <button aria-label="anterior" class="carousel_tienda_home_anterior carousel_tienda_home_anterior1">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button aria-label="siguiente" class="carousel_tienda_home_siguiente carousel_tienda_home_siguiente1">
                    <i class="fas fa-chevron-right"></i>
                </button>
    
                <div class="carousel_tienda_home_lista1">

                    <?php
                        print_r($capilares_recomendados); 
                    ?>
                    
                </div>
    
                
            </div>
        </div>
    
    
        <div class="carousel_tienda_home" id="carousel_tienda_home2">
            <h2 class="carousel_tienda_home_title">Productos para la piel recomendados</h2>
            <div role="tablist" class="carousel_tienda_home_indicadores carousel_tienda_home_indicadores2"></div>
            <div class="carousel_tienda_home_contenedor">
                <button aria-label="anterior" class="carousel_tienda_home_anterior carousel_tienda_home_anterior2">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button aria-label="siguiente" class="carousel_tienda_home_siguiente carousel_tienda_home_siguiente2">
                    <i class="fas fa-chevron-right"></i>
                </button>
    
                <div class="carousel_tienda_home_lista2">
                    <?php print_r($piel_recomendados);?>
                    
                </div>
    
            </div>
        </div>
    
        
        <div class="carousel_tienda_home" id="carousel_tienda_home3">
            <h2 class="carousel_tienda_home_title">Productos de bisuteria recomendados</h2>
            <div role="tablist" class="carousel_tienda_home_indicadores carousel_tienda_home_indicadores3"></div>
            <div class="carousel_tienda_home_contenedor">
                <button aria-label="anterior" class="carousel_tienda_home_anterior carousel_tienda_home_anterior3">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button aria-label="siguiente" class="carousel_tienda_home_siguiente carousel_tienda_home_siguiente3">
                    <i class="fas fa-chevron-right"></i>
                </button>
    
                <div class="carousel_tienda_home_lista3">
                    <?php print_r($bisuteria_recomendados);?>
                    
                </div>
    
            </div>
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
                <li class=" activo enlace_produsctos"><a href="https://web-asonaema.000webhostapp.com/tienda">PRODUCTOS</a></li>
                <li class="enlace_sobre_nosotros"><a href="https://web-asonaema.000webhostapp.com/nosotros" >SOBRE NOSOTROS</a></li>
                <li class="enlace_galeria"><a href="https://web-asonaema.000webhostapp.com/galeria">GALERIA</a></li>
                <li class="enlace_contacto"><a href="https://web-asonaema.000webhostapp.com/contacto">CONTACTO</a></li>
            </ul>
            <p>© Steven báez fernández - 2020</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://web-asonaema.000webhostapp.com/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://web-asonaema.000webhostapp.com/js/carousel.config.js"></script>
    
</body>
</html>