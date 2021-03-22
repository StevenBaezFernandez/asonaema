<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

if(isset($_GET['nombre']) && isset($_GET['correo'])){
    require_once 'model/conexion.php'; 
    $nombre = $_GET['nombre'];
    $correo = $_GET['correo']

    $resul = $db -> Query("SELECT * FROM `newsletter` WHERE correo = '".$correo."'");

    if(!empty($resul)){
        $insercion = $db -> Query("INSERT INTO newsletter(nombre, correo) VALUES ('$nombre', '$correo')");
        if($insercion){
            echo"guardado";
        }else{
            echo"no guardado";
        }
    }else{
        echo"registro existente";
    }
}else{
    echo ("datos no recibidos");
}











?>