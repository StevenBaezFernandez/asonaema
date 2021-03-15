<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

if(!empty($_POST['param'])){
    $param = $_POST['param'];
    require_once 'model/conexion.php';    
    
    $consultas['resul_by_name'] = $db -> Query("SELECT * FROM productos INNER JOIN vendedores ON productos.id_vend = vendedores.id_vend WHERE nombre_prod LIKE '%".$param."%'");
    $consultas['resul_by_vendedor'] = $db -> Query("SELECT id_prod, nombre_prod, descripcion_prod, precio_prod, img_prod, logo_marca from vendedores INNER JOIN productos ON vendedores.id_vend = productos.id_vend WHERE nombre_vend LIKE '%".$param."%'");
    $consultas['resul_by_categoria'] = $db -> Query("SELECT id_prod, nombre_prod, descripcion_prod, precio_prod, img_prod, logo_marca FROM `categoria_productos` INNER JOIN productos ON categoria_productos.id_cat = productos.id_cat INNER JOIN vendedores ON productos.id_vend = vendedores.id_vend WHERE nombre_ruta_cat LIKE '%".$param."%'");
    $consultas['etiquetas'] = $db -> Query("SELECT productos.id_prod, nombre_prod, descripcion_prod, precio_prod, img_prod, logo_marca FROM etiquetas INNER JOIN productos ON etiquetas.id_prod = productos.id_prod INNER JOIN vendedores ON productos.id_vend = vendedores.id_vend WHERE nombre_etiqueta LIKE '%".$param."%'");
    
    $data = array();

    foreach($consultas as &$consulta){
        while($row  = mysqli_fetch_array($consulta)){
            if(!in_array($row['id_prod'], $data)){
                $new_data['id_prod'] = $row['id_prod'];
                $new_data['nombre_prod'] = $row['nombre_prod'];
                $new_data['descripcion_prod'] = $row['descripcion_prod'];
                $new_data['precio_prod'] = $row['precio_prod'];
                $new_data['img_prod'] = $row['img_prod'];
                $new_data['logo_marca'] = $row['logo_marca'];      
                array_push($data, $new_data);
            }         
        }
    }   
    
    if(!empty($data)){
        function unique_multidim_array($array, $key) {
            $temp_array = array();
            $i = 0;
            $key_array = array();           
            foreach($array as $val) {
                if (!in_array($val[$key], $key_array)) {
                    $key_array[$i] = $val[$key];
                    $temp_array[$i] = $val;
                }
                $i++;
            }
            return $temp_array;
        }
    
        $data_no_repeat = unique_multidim_array($data,'id_prod');        
        echo (json_encode($data_no_repeat));

    }else{
        echo "vacio";
    }    
}else{
    echo("hubo un error al cargar los datos");
}

?>