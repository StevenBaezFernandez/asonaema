<?php

    

    if(!empty($_GET['url'])){
            if($_GET['url'] == '/'){
                $url = 'home';    
            }else{
                $url = $_GET['url'];
                // echo $url;
            }
            
        }else{
            $url = 'home';
        }

    $arr_url = explode("/", $url);
    // print_r($arr_url);

    $cantidad_elementos_url_json = count($arr_url);


    if($cantidad_elementos_url_json == 1){
        
        if($arr_url[0] == 'home'){
            require_once 'home.php';
        }
        elseif($arr_url[0] == 'tienda'){
            require_once 'home_tienda.php';

        }elseif($arr_url[0] == 'contacto'){
            require_once 'contacto.php';
        }
        elseif($arr_url[0] == 'nosotros'){
            require_once 'nosotros.php';
        }
        elseif($arr_url[0] == 'galeria'){
            require_once 'galeria.php';
        }
        else{
            require_once '404.html';
        }
    }elseif($cantidad_elementos_url_json == 2){
        if($arr_url[0] == 'tienda' && $arr_url[1] == 'categoria'){
            header('location: http://localhost/asonaema/tienda');
        }
        elseif($arr_url[0] == 'tienda' && $arr_url[1] == 'producto'){
            header('location: http://localhost/asonaema/tienda');
        }
        elseif($arr_url[0] == 'admin' && $arr_url[1] ==''){
            require_once 'admin_files/home.admin.php';            
        }
        elseif($arr_url[0] == 'admin' && $arr_url[1] =='productos'){
            require_once 'admin_files/productos.admin.php';            
        }
        elseif($arr_url[0] == 'admin' && $arr_url[1] =='categorias'){
            require_once 'admin_files/categorias.admin.php';            
        }
        elseif($arr_url[0] == 'admin' && $arr_url[1] =='carousels'){
            require_once 'admin_files/carousels.admin.php';            
        }
        elseif($arr_url[0] == 'admin' && $arr_url[1] =='vendedores'){
            require_once 'admin_files/vendedores.admin.php';            
        }
        elseif($arr_url[0] == 'admin' && $arr_url[1] =='comite'){
            require_once 'admin_files/comite.admin.php';            
        }
    }
    elseif($cantidad_elementos_url_json == 3){
        if($arr_url[0] == 'tienda' && $arr_url[1] == 'categoria'){
            require_once 'categoria.php';
        }elseif($arr_url[0] == 'tienda' && $arr_url[1] == 'producto' && !empty($arr_url[2])){
            require_once 'producto.php';
        }
    }


    // $id = uniqid();

    // echo ($id);
    
   


?>