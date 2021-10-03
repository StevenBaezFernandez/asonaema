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


    
    <div class="valores_mision_vision_container">
        <h2 class="nosotros_main_title">Nosotros</h2>

        <div class="sub_container_valor_mision_vision" id="sub_container_valor_mision_vision">
            <div class="mision" id="mision">
                <img src="img/mission.svg" loading="lazy" class="mision_img" alt="">
                <h2 class="mision_title">Misión</h2>
                <p class="mision_text">
                Mejorar la calidad de vida de aquellas personas que tienen el potencial y sobre todo el deseo de
                emprender su propio negocio usando sus manos como principal recurso
                </p>
            </div>
            <div class="valores" id="valores">
                <img src="img/value.svg" loading="lazy" class="valores_img" alt="">
                <h2 class="valores_title">Valores</h2>
                <ul class="lista_valores">
                    <li><span class="number_item_valor">1</span>Solidaridad</li>
                    <li><span class="number_item_valor">2</span>Responsabilidad</li>
                    <li><span class="number_item_valor">3</span>Respeto</li>
                    <li><span class="number_item_valor">4</span>Compromiso</li>
                    <li><span class="number_item_valor">5</span>Honestidad</li>
                    <li><span class="number_item_valor">6</span>No discriminacion</li>
                    <li><span class="number_item_valor">7</span>Equidad</li>
                </ul>
            </div>
            <div class="vision" id="vision">
                <img src="img/vision.svg" loading="lazy" class="vision_img" alt="">
                <h2 class="vision_title">Visión</h2>
                <p class="vision_text">
                    Desarrollar proyectos innovadores. Construir una Comunidad Emprendedora eficiente, flexible y
                    transparente formada por emprendedores formalmente capacitados. Alcanzar una financiación
                    estable, equilibrada y sostenible. Buscar la mejora continua de los servicios que ofrecen nuestros
                    asociados y de nuestra calidad de vida.
                </p>
            </div>
        </div>
    </div>

    <div class="organigrama_container">
        <h1 class="organigrama_title">Nuestro organigrama</h1>
        <img src="img/organigrama.jpg" loading="lazy" alt="">
    </div>


    <div class="quienes">
        <div class="info_quienes">
            <h3 class="quienes_title">Que es ASONAEMA?</h3>
            <p class="quienes_text">
                Asociación Nacional de Emprendedores Artífices es una entidad sin fines de lucro que desarrolla
                actividades, culturales, educativas y cooperación, dirigidas a mejorar la calidad de vida de los
                Emprendedores artesanos a nivel del territorio nacional dominicano con diferentes capacidades y
                habilidades.
            </p>
            <button class="quienes_btn"> Más información <i class="fas fa-arrow-right"></i></button>
        </div>
        <div class="img_quienes">
            <img src="img/quienes_img.jpg" loading="lazy" alt="">
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