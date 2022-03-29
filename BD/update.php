<?php
    require_once './parametros.php';
    $conex=mysqli_connect(Servidor,Usuario,Clave,Base_Datos,Puerto);
    
    if(!mysqli_connect_errno()){
        echo "Conexion exitosa <br/>";
        
        $sql="UPDATE tipousuario SET nombre='Propietario123' WHERE Codigo = 2";
        $exito=mysqli_query($conex, $sql);
        if($exito){
            echo "Registro actualizado con exito <br/>";
        }
        else{
            echo "Ocurrio un error en la actualizacion <br/>";
        }
    }
    else{
        echo "error en la conexion";
    }
?>