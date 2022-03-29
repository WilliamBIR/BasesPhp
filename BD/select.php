<?php
    require_once './parametros.php';
    $conex=mysqli_connect(Servidor,Usuario,Clave,Base_Datos,Puerto);
    
    if(!mysqli_connect_errno()){
        echo "Conexion exitosa <br/>";
        
        $sql="SELECT * FROM telefonos";
        $datos= mysqli_query($conex, $sql);
        $numeroresultados= mysqli_num_rows($datos);
        echo $numeroresultados;
        if($numeroresultados>0){
            while($fila= mysqli_fetch_assoc($datos)){
                echo "numero: ".$fila["Telefono"]."<br/>";
            }
        }
        else{
            echo "no hay nada";
        }
    }
    else{
        echo "error en la conexion";
    }

?>