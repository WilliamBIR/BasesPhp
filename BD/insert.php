<?php
    require_once './parametros.php';
    $conex=mysqli_connect(Servidor,Usuario,Clave,Base_Datos,Puerto);
    
    if(!mysqli_connect_errno()){
        echo "Conexion exitosa <br/>";
        
        $sql="INSERT INTO tipousuario (nombre, vigencia) VALUES('Propietario 2',1)";
        $exito=mysqli_query($conex, $sql);
        if($exito){
            echo "Registro insertado con exito <br/>";
        }
        else{
            echo "Ocurrio un error en la insercion <br/>";
        }
    }
    else{
        echo "error en la conexion";
    }

?>