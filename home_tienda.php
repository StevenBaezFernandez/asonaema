<?php 
    require_once 'model/conexion.php';
    $resul_home_tienda = $db -> Query("SELECT * FROM `carousel_productos` INNER JOIN productos ON carousel_productos.id_prod = productos.id_prod WHERE carousel = 'home tienda'");
    $consultas = [
        $db -> Query("SELECT productos.id_prod, carousel, position, nombre_prod, descripcion_prod, precio_prod, img_prod, vendedores.nombre_marca, vendedores.logo_marca FROM carousel_productos INNER JOIN productos ON carousel_productos.id_prod = productos.id_prod INNER JOIN vendedores ON productos.id_vend = vendedores.id_vend WHERE carousel = 'capilares recomendados' ORDER BY `carousel_productos`.`position` ASC"),
        $db -> Query("SELECT productos.id_prod, carousel, position, nombre_prod, descripcion_prod, precio_prod, img_prod, vendedores.nombre_marca, vendedores.logo_marca FROM carousel_productos INNER JOIN productos ON carousel_productos.id_prod = productos.id_prod INNER JOIN vendedores ON productos.id_vend = vendedores.id_vend WHERE carousel = 'piel recomendados' ORDER BY `carousel_productos`.`position` ASC"),
        $db -> Query("SELECT productos.id_prod, carousel, position, nombre_prod, descripcion_prod, precio_prod, img_prod, vendedores.nombre_marca, vendedores.logo_marca FROM carousel_productos INNER JOIN productos ON carousel_productos.id_prod = productos.id_prod INNER JOIN vendedores ON productos.id_vend = vendedores.id_vend WHERE carousel = 'bisuteria recomendados' ORDER BY `carousel_productos`.`position` ASC")
    ];
    $home_tienda_indicadores = "";
    $home_tienda = "";
    $array_temp = [
        $capilares_recomendados = "",
        $piel_recomendados = "",
        $bisuteria_recomendados = ""
    ];
    $contador_home_tienda = 0;
    $i = 0;
    foreach($consultas as $consulta){
        while($row = mysqli_fetch_array($consulta)){
            $array_temp[$i] .= "<a href='http://localhost/asonaema/tienda/producto/".$row['id_prod']."'>";
            $array_temp[$i] .= "<div class='carousel_tienda_home_elemento'>";
            $array_temp[$i] .= "<div class='header_img_card'>";
            $array_temp[$i] .= "<img src='".$row['img_prod']."' loading='lazy' class='carousel_tienda_home_img' alt=''>";
            $array_temp[$i] .= "</div>";
            $array_temp[$i] .= "<div class='body_elemento_tienda_home'>";
            $array_temp[$i] .= "<h3 class='elemento_tienda_home_title' title='".$row['nombre_prod']."'>".$row['nombre_prod']."</h3>";
            $array_temp[$i] .= "<p class='elemento_tienda_home_text'>".$row['descripcion_prod']."</p>";
            $array_temp[$i] .= "<div class='container_vendedor_y_precio'>";
            $array_temp[$i] .= "<img src='".$row['logo_marca']."' loading='lazy' alt=''>";
            $array_temp[$i] .= "<span class='precio_producto'>RD $".$row['precio_prod']."</span>";
            $array_temp[$i] .= "</div>";
            $array_temp[$i] .= "</div>";
            $array_temp[$i] .= "</div>";    
            $array_temp[$i] .= "</a>";
        }
        $i ++;
    }

    while($row = mysqli_fetch_array($resul_home_tienda)){

        if($contador_home_tienda == 0){
            $home_tienda .= "<div class='carousel-item active'>";
            $home_tienda_indicadores .= "<li data-bs-target='#carouselExampleCaptions' data-bs-slide-to='0' class='active'></li>";
        }else{
            $home_tienda .= "<div class='carousel-item'>";
            $home_tienda_indicadores .= "<li data-bs-target='#carouselExampleCaptions' data-bs-slide-to='".$contador_home_tienda."'></li>";
        }

        $home_tienda .= "<img src='http://localhost/asonaema/img/bg_carousel_tienda_home.jpg' loading='lazy' class='d-block w-100' alt='...'>";
        $home_tienda .= "<div class='carousel-caption carousel_caption_tieda_home'>";
        $home_tienda .= "<div class='caption_child caption_child1'>";
        $home_tienda .= "<h2 class='title_carousel_pruct_tienda_home'>".$row['nombre_prod']."</h2>";
        $home_tienda .= "<p class='descripcion_product_tienda_home'>".$row['descripcion_prod']."</p>";
        $home_tienda .= "<a href='http://localhost/asonaema/tienda/producto/".$row['id_prod']."' class='btn_ver_producto_carousel'>Ver Producto <i class='fas fa-eye'></i></a>";
        $home_tienda .= "</div>";
        $home_tienda .= "<div class='caption_child caption_child2'>";
        $home_tienda .= "<img src='".$row['img_prod']."' loading='lazy'  alt=''>";
        $home_tienda .= "</div>";
        $home_tienda .= "</div>";
        $home_tienda .= "</div>";
        
        $contador_home_tienda +=1;
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
                    <h2>Iluminación</h2>
                </div>
            </a>
            <a href="tienda/categoria/piel">
                <div class="categoria_item piel">
                    <h2>Variadores de corriente</h2>
                </div>
            </a>
            <a href="tienda/categoria/bisuteria">
                <div class="categoria_item bisuteria">
                    <h2>Interructores</h2>
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
                        print_r($array_temp[0]); 
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
                    <?php print_r($array_temp[1]);?>
                    
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
                    <?php print_r($array_temp[2]);?>
                    
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

    <?php
        require_once 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="http://localhost/asonaema/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="http://localhost/asonaema/js/carousel.config.js"></script>
    
</body>
</html>