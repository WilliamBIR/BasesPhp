<?php
    $datosVisitante=$_SERVER['HTTP_USER_AGENT'];
    echo $datosVisitante . "<br/>";
    
    //Buscar posicion de una cadena de caracteres
    echo strpos($datosVisitante, "Windows NT 10.0") . "<br/>";
    
    if(strpos($datosVisitante, "Windows NT 10.0")>0){
        echo "Windows 10 <br/>";
    }
    elseif(strpos($datosVisitante, "Windows NT 6.3")>0){
        echo "Windows 8.1 <br/>";
    }
    else{
        echo "Otro sistema <br/>";
    }
?>