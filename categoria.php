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
    
    <?php
        require_once 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="http://localhost/asonaema/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="http://localhost/asonaema/js/carousel.config.js"></script>
    
</body>
</html>