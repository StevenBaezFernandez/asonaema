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
                    <img src="http://localhost/asonaema/img/search_icon.svg" alt="button search">
                </div>
            </div>
            
        </div>
        <div class="header2">
            <a href="/asonaema" class="contenedor_img_logo">
            <img src="http://localhost/asonaema/img/logo_prueba.svg" alt="logotipo">
            </a>
            
            <ul class="menu principal">
                <li><a href="http://localhost/asonaema" class="activo enlace_inicio">INICIO</a></li>
                <li class=" activo enlace_produsctos"><a href="http://localhost/asonaema/tienda">PRODUCTOS</a></li>
                <li class="enlace_sobre_nosotros"><a href="http://localhost/asonaema/nosotros" >SOBRE NOSOTROS</a></li>
                <li class="enlace_galeria"><a href="http://localhost/asonaema/galeria">GALERIA</a></li>
                <li><a href="">MÁS <i class="fas fa-angle-down"></i></a>
                    <ul class="submenu">
                        <li><a href="http://localhost/asonaema/galeria" class="mas_galeria">Galeria</a></li>
                        <li><a href="http://localhost/asonaema/nosotros" class="mas_sobre_nosotros">sobre nosotros</a></li>
                        <li><a href="http://localhost/asonaema/tienda" class="mas_productos">productos</a></li>
                        <li><a href=""></a></li>
                    </ul>
                </li>
            </ul>
            <a href="http://localhost/asonaema/contacto"><button role="button" class="btn-main"><i class="fas fa-envelope"></i> CONTACTO</button></a>
            
        </div>
    </header>
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
            <img src="http://localhost/asonaema/img/cancel_icon.svg" class="cerrar_busqueda" alt="">
        </div>
        <div class="resultado_busqueda">
            <h3 class="alerta_no_funciona"> <i class="fa fa-exclamation-triangle"></i> El buscador no esta listo todavia estamos trabando en ello.</h3>
        </div>
    </div>



    <div class="wraper_grid_products">

    <div class="indicador_ruta">
        <span class="indicador_ruta_enlace"><a href="http://localhost/asonaema/tienda">Tienda </a> <span>/Productos para la piel</span></span>
        <h1 class='title_categoria_product'>Productos para la piel</h1>
    </div>

    <?php
    
       require_once 'model/conexion.php';

       $url = $_GET['url'];
       $url_producto = explode("/", $url);
       $nombre_categoria = $url_producto[2];

       $resul_categoria = $db -> Query("SELECT * FROM productos INNER JOIN categoria_productos ON categoria_productos.id_cat = productos.id_cat INNER JOIN vendedores ON productos.id_vend = vendedores.id_vend WHERE categoria_productos.nombre_cat = '".$nombre_categoria."'");

        $productos_categoria = "";


       while($row = mysqli_fetch_array($resul_categoria)){
        $productos_categoria .= "<a href='http://localhost/asonaema/tienda/producto/".$row['id_prod']."'>";
        $productos_categoria .= "<div class='tarjeta_producto_categoria'>";
        $productos_categoria .= "<div class='header_img_card'>";
        $productos_categoria .= "<img src='".$row['img_prod']."' class='carousel_tienda_home_img' alt=''>";
        $productos_categoria .= "</div>";
        $productos_categoria .= "<div class='body_elemento_tienda_home'>";
        $productos_categoria .= "<h3 class='elemento_tienda_home_title' title='".$row['nombre_prod']."'>".$row['nombre_prod']."</h3>";
        $productos_categoria .= "<p class='elemento_tienda_home_text'>".$row['descripcion_prod']."</p>";
        $productos_categoria .= "<div class='container_vendedor_y_precio'>";
        $productos_categoria .= "<img src='".$row['logo_marca']."' alt=''>";
        $productos_categoria .= "<span class='precio_producto'>RD $".$row['precio_prod']."</span>";
        $productos_categoria .= "</div>";
        $productos_categoria .= "</div>";
        $productos_categoria .= "</div>";    
        $productos_categoria .= "</a>"; 
    }

    
    ?>

        <div class="grid_products">
            <?php print_r($productos_categoria);?>    
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