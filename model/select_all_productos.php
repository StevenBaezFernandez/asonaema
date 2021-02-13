<?php

    require_once 'conexion.php';

    echo '<br>';

    $resul = $db -> Query("SELECT * FROM productos");


    $array_productos = [];

    while($row = mysqli_fetch_array($resul)){
        
        echo "<table border='1'>";
        echo "<tr>";
        echo ("<td>".$row['id_prod']."</td>");
        echo ("<td>".$row['nombre_prod']."</td>");
        echo ("<td>".$row['descripcion_prod']."</td>");
        echo ("<td>".$row['precio_prod']."</td>");
        echo "</tr>";
        echo "</table>";
        // $array_productos['fecha_public_prod'] = $row['fecha_public_prod'];
        // $array_productos['id_vend'] = $row['id_vend'];
        // $array_productos['id_etiquetas'] = $row['id_etiquetas'];
        // $array_productos['img_prod'] = $row['img_prod'];
        // $array_productos['id_cat'] = $row['id_cat'];



    }

    print_r($array_productos);


?>