<?php
    require_once './parametros.php';
    //$conex= mysqli_connect("localhost","root","Toon1100","pruebaphp","3306");
    $conex= mysqli_connect(Servidor,Usuario,Clave,Base_Datos,Puerto);
    
    if($conex){
        echo "Conexion exitosa <br/>";
        echo mysqli_get_host_info($conex). "<br/>";
        mysqli_close($conex);
    }
    else{
        echo "Error en la conexion";
    }
?>