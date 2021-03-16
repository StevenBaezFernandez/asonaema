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