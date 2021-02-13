<!DOCTYPE html>
 <html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
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
                    <img src="img/search_icon.svg" alt="button search">
                </div>
            </div>

            <!-- <i class="fas fa-sort-down"></i> -->
            
        </div>
        <div class="header2">
            <a href="/asonaema" class="contenedor_img_logo">
                <img src="http://localhost/asonaema/img/logo_prueba.svg" alt="logotipo">
            </a>
            
            <ul class="menu principal">
                <li><a href="" class="activo enlace_inicio">INICIO</a></li>
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
            <li><a href="/asonaema" class="activo enlace_inicio">INICIO</a></li>
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
            <li><a href="/asonaema" class="activo enlace_inicio"><span class="icon_movil fa fa-home"></span> INICIO</a></li>
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

    <div class="container_carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"></li>
    
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/img1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel_caption_home_home">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel_caption_home_home">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel_caption_home_home">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel_caption_home_home">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel_caption_home_home">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel_caption_home_home">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/img7.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel_caption_home_home">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
    </div>

    
    
    
    <div class="column_info_container">
        <!-- particles.js container --> 
        <div id="particles-js"></div> 
        
        <div class="column_info">
            <img src="http://localhost/asonaema/img/emprendedor.svg" class="column_info_imgtop" alt="">
            <h2 class="column_info_title">¿Que es un emprendedor?</h2>
            <p class="column_info_text">
                Un emprendedor es una persona que tiene la capacidad de descubrir e identificar algún tipo de oportunidad 
                de negocios. Así, en base a ello, organiza una serie de recursos con el fin de darle inicio a un proyecto empresarial.
            </p>
            <button class="column_info_button" id="btn_mas_info_que_es_un_emprendedor">Más Información <i class="fas fa-arrow-right"></i></button>
        </div>
        <div class="column_info">
            <img src="http://localhost/asonaema/img/caracteristicas_emprendedor.svg" class="column_info_imgtop" alt="">
            <h2 class="column_info_title">Característica de un emprendedor</h2>
            <p class="column_info_text">
                Emprender exige mucho esfuerzo y trabajo, incertidumbre, miedos al cambio, ambición y vivir fuera de la zona 
                de confort, más si invertimos dinero y tiempo en nuestro negocio del que queremos vivir. Quien te diga que es 
                fácil no te dice toda la verdad.
            </p>
            <button class="column_info_button" id="btn_mas_info_caracteristicas_emprendedor">Más Información <i class="fas fa-arrow-right"></i></button>
        </div>
        <div class="column_info">
            <img src="http://localhost/asonaema/img/retos_emprendedor.svg" class="column_info_imgtop" alt="">
            <h2 class="column_info_title">Retos que debe superar un emprendedor</h2>
            <p class="column_info_text">
                Conseguir la libertad financiera con una idea de negocio es un asunto que pone de cabeza a más de un emprendedor; 
                hay muchas vertientes a las que hay que prestar atención para conseguir el éxito.
            </p>
            <button class="column_info_button" id="btn_mas_info_retos_emprededor">Más Información <i class="fas fa-arrow-right"></i></button>
        </div>
    </div>
    
    
    <div class="grid_info" id="grid_info1">
        <div class="left grid_img">
            <img src="img/img_grid_info1.svg" alt="img_grid_info1.svg">
        </div>
        <div class="right grid_text">
            <h3 class="grid_text_title">Lorem ipsum dolor sit amet.</h3>
            <p class="grid_text_text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod quis libero numquam ex molestiae ipsum 
                eius repellendus deleniti voluptas atque possimus iste harum sint, est totam cupiditate magni doloremque at?
            </p>
            <button class="btn_grid_info">Más Información <i class="fas fa-arrow-right"></i></button>
        </div>
    </div>

    <div class="paralax" id="main_paralax">
        <div class="cover_paralax">
            <h2 class="title_paralax">Lorem ipsum dolor sit amet.</h2>
            <p class="text_paralax">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore magni ea aut iste ex est molestias autem, veritatis dolor vel.
            </p>
            <button class="btn_paralax">Más Información <i class="fas fa-arrow-right"></i></button>
        </div>
    </div>

    <div class="grid_info" id="grid_info2">
        <div class="right grid_text">
            <h3 class="grid_text_title">Lorem ipsum dolor sit amet.</h3>
            <p class="grid_text_text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod quis libero numquam ex molestiae ipsum 
                eius repellendus deleniti voluptas atque possimus iste harum sint, est totam cupiditate magni doloremque at?
            </p>
            <button class="btn_grid_info">Más Información <i class="fas fa-arrow-right"></i></button>
        </div>

        <div class="left grid_img">
            <img src="img/img_grid_info2.svg" alt="img_grid_info1.svg">
        </div>
    </div>


    <div class="carousel_miembros" id="carousel_miembros">
        <h2 class="carousel_title">Miembros de la empresa</h2>
        <div class="carousel__contenedor">
            <button aria-label="anterior" class="carousel__anterior carousel_anterior_miembros">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button aria-label="siguiente" class="carousel__siguiente carousel_siguiente_miembros">
                <i class="fas fa-chevron-right"></i>
            </button>

            <div class="carousel__lista">
                <div class="carousel__elemento">
                    <img src="img/miembros_avatar1.jpg" class="carousel__img" alt="">
                    <p class="carousel__miembros_nombre">Dana Lopez</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/miembros_avatar2.jpg" class="carousel__img" alt="">
                    <p class="carousel__miembros_nombre">desiree</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/miembros_avatar3.jpg" class="carousel__img" alt="">
                    <p class="carousel__miembros_nombre">todd williams</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/miembros_avatar4.jpg" class="carousel__img" alt="">
                    <p class="carousel__miembros_nombre">bonnie weaver</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/miembros_avatar5.jpg" class="carousel__img" alt="">
                    <p class="carousel__miembros_nombre">Tanya Matthews</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/miembros_avatar6.jpg" class="carousel__img" alt="">
                    <p class="carousel__miembros_nombre">Lillie Ruiz</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/miembros_avatar7.jpg" class="carousel__img" alt="">
                    <p class="carousel__miembros_nombre">Kevin Andrews</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/miembros_avatar8.jpg" class="carousel__img" alt="">
                    <p class="carousel__miembros_nombre">Amelia Mcdonalid</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/miembros_avatar9.jpg" class="carousel__img" alt="">
                    <p class="carousel__miembros_nombre">Zoey Butler</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/miembros_avatar10.jpg" class="carousel__img" alt="">
                    <p class="carousel__miembros_nombre">Sarah Gilbert</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/miembros_avatar11.jpg" class="carousel__img" alt="">
                    <p class="carousel__miembros_nombre">Glenda Hunt</p>
                </div>
                <div class="carousel__elemento">
                    <img src="img/miembros_avatar12.jpg" class="carousel__img" alt="">
                    <p class="carousel__miembros_nombre">Mary Wagner</p>
                </div>
                
            </div>

            <div role="tablist" class="carousel__indicadores"></div>
        </div>
    </div>

      

    <!-- <div class="overlay">
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
    </div> -->

    <div class="overlay mas_info">
        <div class="mas_info_que_es_un_emprendedor">
            <i class="cerrar_mas_info fas fa-times"></i>
            <img src="http://localhost/asonaema/img/emprendedor.svg" class="mas_info_img_que_es_un_emprendedor" alt="">
            <h2 class="mas_info_title_que_es_un_emprendedor">¿Que es un emprendedor?</h2>
            <div class="mas_info_text_que_es_un_emprendedor">
                <p>
                    Un emprendedor es una persona que tiene la capacidad de descubrir e identificar algún tipo de oportunidad 
                    de negocios. Así, en base a ello, organiza una serie de recursos con el fin de darle inicio a un proyecto empresarial.
                </p>
                <p>
                    Respecto al significado de emprendedor suele entenderse como aquel que se convierte en creador o fundador de una 
                    iniciativa de negocios o empresarial. Esto, individualmente o actuando como colaborador en unión a otros 
                    individuos ayudando a realizarlo.
                </p>
                <p>
                    Comúnmente, el emprendedor ocupa posiciones en los proyectos empresariales en los que se encarga de dirigir y organizar 
                    su nacimiento y posterior funcionamiento. De ese modo, asume una serie de riesgos, en mayor parte, de carácter 
                    financiero o económico.
                </p>
                <p>
                    Actuaciones de un emprendedor
                    Podría definirse el modelo de actuación de un emprendedor de la siguiente manera:

                    Localiza nuevas oportunidades mediante el estudio y análisis del mercado y sus cambios. Así, conoce las actitudes y preferencias del público.
                </p>
                <p>
                    Reúne recursos de tipo financiero, tecnológico o humano para poder acometer el nuevo proyecto.
                    Pone en marcha el negocio con determinación y afrontando su posición de responsabilidad, teniendo siempre presente una capacidad de innovación y originalidad.
                </p>
                <p>
                    Características de un emprendedor
                    Existen diversas características que pueden ayudar a definir el carácter o perfil de un emprendedor, como la 
                    creatividad, la capacidad de actuación bajo riesgo y el liderazgo
                </p>
                <p>
                    Para que una persona tenga la capacidad de emprender e iniciar un proyecto, debe afrontar los nuevos retos propios de esta 
                    posición ayudándose de energía y entusiasmo. De esta forma, las diferentes actividades, funciones y tareas relativas a su 
                    posición podrán ser llevadas a cabo, especialmente, en las primeras etapas del negocio, cuando se dice que está en situación 
                    de startup.
                    La capacidad de innovación que debe poseer un individuo emprendedor debe suponer que este es hábil a la hora de lograr diferenciarse 
                    del resto de competidores del mercado. Ser único y novedoso en un sector puede ser una buena manera de comenzar un proyecto 
                    empresarial y dar un empujón inicial a una idea, tal y como se estudia en campos como el marketing.
                </p>
            </div>

        </div>
        <div class="mas_info_caracteristicas_emprendedor">
            <i class="cerrar_mas_info fas fa-times"></i>
            <img src="http://localhost/asonaema/img/caracteristicas_emprendedor.svg" class="mas_info_img_que_es_un_emprendedor" alt="">
            <h2 class="mas_info_title_que_es_un_emprendedor">Característica de un emprendedor</h2>
            <div class="mas_info_text_que_es_un_emprendedor">
                <p>
                     Emprender exige mucho esfuerzo y trabajo, incertidumbre, miedos al cambio, ambición y vivir fuera de la zona de confort, más si invertimos dinero y tiempo en nuestro negocio del que queremos vivir. Quien te diga que es fácil no te dice toda la verdad.
                </p>
                <p>
                    Quiero comenzar este post por definir la palabra emprender: significa empezar a hacer una cosa determinada, en especial cuando exige esfuerzo o trabajo o cuando tiene cierta importancia o envergadura.
                </p>
                <p>
                    Puedes emprender por un reto, por cumplir un sueño o por necesidad, pero no todo el mundo tiene que emprender, ni tiene la capacidad.  Es lógico y debe haber de todo, es lo que engrandece al ser humano.
                </p>
                <p>
                    Puedes emprender por un reto, por cumplir un sueño o por necesidad, pero no todo el mundo tiene que emprender, ni tiene la capacidad.  Es lógico y debe haber de todo, es lo que engrandece al ser humano.
                </p>
                <p>
                    No quiere decir que una persona que trabaja por cuenta ajena no tiene problemas, claro que los tiene y  los tiene que afrontar, pero el emprendedor muchas veces está solo y no cuenta con una infraestructura empresarial que le respalde en esos problemas, por otra parte le gusta crear constantemente, que sus días no sean todos iguales, vive en la incertidumbre, es creativo y tiene que desarrollar muchas habilidades, muchas veces es un hombre o mujer orquesta.
                </p>
                <p>
                    En definitiva debe saber de todo. Eres tu jefe, eres comercial, debes saber venderte y a tu negocio, eres líder, debes saber motivarte, debes ser productivo y todo tu solo.
                    En la vida laboral de una persona, si se ve abocado a emprender un negocio, debe tener en cuenta estas características y si en alguna no estás los suficientemente cómodo, debes formarte.

                    10 características que tiene un emprendedor
                    Apasionado/ a: los emprendedores viven por y para su negocio para alcanzar sus metas y sueños. La pasión es la que hace que se saquen fuerzas a veces dónde no las hay.
                    Creativos / as: los emprendedores están siempre barajando posibilidades de negocio y sienten la necesidad de crear. Tienen gran capacidad de tener ideas y poder llevarlas a cabo.
                    Perseverantes y resilentes: no se rinden si fallan, de cualquier fallo o fracaso ven posibilidades, ven aprendizajes de los cuales sirven para poner en práctica en otros negocios u otras ideas.
                    Ven oportunidades: los emprendedores tiene olfato para generar oportunidades y dar soluciones a los problemas de los consumidores, aportando valor con soluciones y servicios nuevos.
                    Confianza en sí mismo/ a y persistentes: sabe que con trabajo y esfuerzo conseguirá llegar a sus objetivos y no renuncia a ello aunque no sea fácil.
                </p>
                <p>
                    Sabe tomar decisiones y sabe correr riesgos y afrontarlos.
                    Aprendizaje constante: el emprendedor tiene que estar formándose constantemente, no solo en cuestiones de su sector, sino también para aprontar situaciones a veces complicadas, y que deber saber gestionar, como cuándo falta motivación, cómo ser productivo, cómo tener dotes de liderazgo, saber hablar en público, cuestiones tan necesarias para la gestión de tu negocio día a día. Lees otros blogs, realiza cursos online, presenciales, acude eventos y reuniones de Networking, dónde aprender y conocer a otros
                    Tiene que tener dotes comerciales: el emprendedor debe saber explicar correctamente su negocio, debe saber vender y venderlo a los clientes, proveedores o inversores.
                    Son valientes: son capaces de aceptar los retos, asumen responsabilidades y problemas, aprovechan cualquier oportunidad para alcanzar  los objetivos.
                </p>
                <p>
                    Trabajo en equipo: deber ser líderes y deben saber gestionar a sus equipos.
                    Si cumples con estas características tu negocio ya va a ir por buen camino. Empezar un negocio es un reto y puede cambiar tu vida, pero no debes lanzarte sin tener los conocimientos, actitud  y aptitud suficiente. Si necesitas más información o necesitas ayuda para emprender, déjame tu comentario y estaré encantada de poder ayudarte. 
                </p>
            </div>
        </div>
        <div class="mas_info_retos_emprendedor">
            <i class="cerrar_mas_info fas fa-times"></i>
            <img src="http://localhost/asonaema/img/retos_emprendedor.svg" class="mas_info_img_que_es_un_emprendedor" alt="">
            <h2 class="mas_info_title_que_es_un_emprendedor">Retos que debe superar un emprendedor</h2>
            <div class="mas_info_text_que_es_un_emprendedor">
                <p>
                    Conseguir la libertad financiera con una idea de negocio es un asunto que pone de cabeza a más de un emprendedor; hay muchas vertientes a las que hay que prestar atención para conseguir el éxito, pero si se tiene la certeza y la confianza en las actitudes y aptitudes que posee como emprendedor y en la idea de negocio en sí, es probable que pueda superar los principales retos que debe vencer un emprendedor.
                </p>
                <p>
                    Si bien es cierto que los emprendedores tienen múltiples características y habilidades que le permiten superar cualquier obstáculo, también es verdad que el camino para poner en marcha un proyecto no es fácil. En esta oportunidad, mencionamos algunos de los retos que debe superar un emprendedor para ver su sueño hecho realidad.
                </p>
                <h4>Retos que todo emprendedor debe superar</h4>
                <h5>Financieros y administrativos:</h5>
                <p>
                    Creemos que uno de los retos más complicados de superar es el hecho de no tener suficiente capital para arrancar un negocio con todo lo necesario para empezar a disfrutar de un ROI positivo. A eso hay que agregarle el hecho que, lo poco que se consigue mediante distintas formas de financiación, hay que aprender a administrarlo, porque de lo contrario, se experimenta el fracaso.
                    Teniendo tantos recursos efectivos para conseguir clientes y concretar ventas, tanto en el mercado físico como en el ámbito digital, como por ejemplo: el uso de cta en páginas web, Redes Sociales, Marketing de Contenidos, Inbound Marketing, etc., es complicado determinar cuál de tantos es el que brinda resultados más rápidos y eficientemente, por lo que es importante saber administrar bien los recursos e invertir en la opción que mejor dé resultados para el negocio que recién comienza.
                </p>
                <h5>Falta de conocimiento:</h5>
                <p>
                    Los emprendedores son entusiastas y optimistas y esas, definitivamente, son dos características que le permitirán encontrar la salida cuando el camino se ponga oscuro. Sin embargo, no todo es color rosa, porque aunque tengan todas las ganas de poner su sueño en marcha, se enfrenta a un mundo desconocido.
                </p>
                <p>
                    Aunque tengan una gran idea de negocios y la certeza de que será un éxito en el mercado, no debemos olvidar que se comienza a caminar por un sendero desconocido. Cuando hablamos de desconocimiento, no solo nos referimos a la falta de conocimiento práctico para poner en marcha el negocio, también a la falta de conocimiento sobre sí mismo.
                    Para esos casos, siempre es recomendable evaluar si se está estableciendo las metas correctas y si el plan de acción que ha definido tiene sentido en el mercado. Es decir, el emprendedor tiene que alinear sus intereses personales con los objetivos del negocio para que experimente el verdadero éxito. Sí, sabemos que es uno de los principales retos que debe superar un emprendedor, pero es menester aplicar este ejercicio para asegurarse de hacer las cosas bien desde un principio.
                </p>
                <h5>Visualizar las oportunidades:</h5>
                <p>
                    Otro de los grandes retos que debe superar un emprendedor es el hecho de reconocer cuando ha tocado a su puerta una oportunidad para avanzar en su proyecto. A pesar de tener una maleta llena de sueños, algunos emprendedores suelen ser inocentes y justo eso puede hacer que pierda la oportunidad de ver materializado su proyecto.
                    Para ser emprendedor, hay que tener todos los sentidos trabajando, sobre todo cuando se está haciendo un esfuerzo para identificar oportunidades. Por nuestra parte siempre vamos a recomendar conocer quién es el cliente ideal, qué es lo que busca pero, sobre todo, cuáles son las necesidades insatisfechas del mercado. Cuando estás analizando constantemente el mercado, puedes identificar oportunidades casi de manera natural.
                </p>
                <h5>Ponerse al día con las políticas y legislaciones de su país:</h5>
                <p>
                    Quizás podamos tomarlo como una extensión de la falta de conocimiento. Lo cierto del caso es que tratar de emprender sin tener claro las legislaciones, normativas vigentes o políticas del estado con respecto al tipo de negocio que se tiene en mente es, sin duda, otro de los retos que debe superar un emprendedor.
                </p>
                <p>
                    La recomendación con respecto a este punto es que el emprendedor busque asesoría de un mentor que pueda guiar los pasos, a fin de que la idea de negocio tenga cabida dentro de las leyes del país.
                    Un mentor no solo puede ser de gran ayuda para ayudar a conocer los reglamentos que rigen la actividad comercial de la idea de negocio, también es excelente para guiarlo con todo lo referente al proyecto, por ejemplo, si quisiera iniciarse en el mercado online, puede ayudar a crear un plan de contenidos, hacer publicidad en Facebook o crear un plan de Social Media, es decir, su competencia es muy amplia y puede convertirse en la mano derecha de cualquier emprendedor.
                </p>
                <p>
                    El emprendedor está sometido a un reto por minuto, toda su vida empieza a girar entorno a su emprendimiento, si es que ha decidido dedicarse a él al 100%, por tanto, son miles las complicaciones que tiene que resolver a diario, por ejemplo: acostumbrarse a vivir lleno de dudas e incertidumbre, soledad, pero sobre todo el miedo de fracasar y aprender a superarlo para levantarse rápidamente.
                    Nadie dijo que sería fácil, pero la satisfacción de llevar a cabo su sueño, generará una alegría indescriptible
                </p>
                <h5>¿Está listo para superar estos retos?</h5>
            </div>
        </div>
        <div class="mas_info_grid_info1"></div>
        <div class="mas_info_grid_info2"></div>
        <div class="mas_info_paralax"></div>
    </div>


    <script id="dsq-count-scr" src="//dilorenst-1.disqus.com/count.js" async></script>
    <div id="disqus_thread"></div>
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://dilorenst-1.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>






                            
    <div class="blanco">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
        <p class="cargando">Cargando la página</p>
    </div>

    <button role="button" class="btn_ir_arriba"><i class="fas fa-angle-up"></i></button>

    <footer class="pie_pagina">
        <div class="cuerpo">

            <div class="newsletter">
                <h2>Subscribirse</h2>
                <p>Subscribete a nuestro newsletter para estar al tanto de nuestros productos y ofertas</p>
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
                <li><a href="/asonaema" class="activo enlace_inicio">INICIO</a></li>
                <li class=" activo enlace_produsctos"><a href="tienda">PRODUCTOS</a></li>
                <li class="enlace_sobre_nosotros"><a href="nosotros" >SOBRE NOSOTROS</a></li>
                <li class="enlace_galeria"><a href="galeria">GALERIA</a></li>
                <li class="enlace_contacto"><a href="contacto">CONTACTO</a></li>
            </ul>
            <p>© Steven báez fernández - 2020</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/particles.config.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="js/carousel.config.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>