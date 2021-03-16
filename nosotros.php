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


    <div class="banner_nosotros">
        <div class="cover_banner_nosotros">
        </div>
    </div>
    
    <div class="valores_mision_vision_container">
        <h2 class="nosotros_main_title">Nosotros</h2>

        <div class="sub_container_valor_mision_vision" id="sub_container_valor_mision_vision">
            <div class="mision" id="mision">
                <img src="img/mission.svg" loading="lazy" class="mision_img" alt="">
                <h2 class="mision_title">Misión</h2>
                <p class="mision_text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, ratione corrupti. Vero, praesentium. 
                    Molestias quis consectetur debitis earum dicta? Blanditiis architecto quidem unde numquam dolorum. Explicabo, 
                    ipsam! Similique odio hic temporibus, deserunt ipsum quibusdam expedita tempore adipisci!
                </p>
            </div>
            <div class="valores" id="valores">
                <img src="img/value.svg" loading="lazy" class="valores_img" alt="">
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
                <img src="img/vision.svg" loading="lazy" class="vision_img" alt="">
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
        <img src="img/organigrama.jpg" loading="lazy" alt="">
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