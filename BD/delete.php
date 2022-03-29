<?php
    require_once './parametros.php';
    $conex=mysqli_connect(Servidor,Usuario,Clave,Base_Datos,Puerto);
    
    if(!mysqli_connect_errno()){
        echo "Conexion exitosa <br/>";
        
        $sql="DELETE FROM tipousuario WHERE Codigo = 4";
        $exito=mysqli_query($conex, $sql);
        if($exito){
            echo "Registro borrado con exito <br/>";
        }
        else{
            echo "Ocurrio un error en la borracion <br/>";
        }
    }
    else{
        echo "error en la conexion";
    }
