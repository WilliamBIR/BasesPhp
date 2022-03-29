<?php
    
function dividir($n1,$n2){
    if($n2===0){
        throw new Exception("Division por 0");
    }
    else{
        return $n1/$n2;
    }
    }
    
    try{
        echo dividir(5,2) . "<br/>";
        echo dividir(7,0) . "<br/>";
    } catch (Exception $ex) {
        echo "Excepcion ocurrida" . $ex->getMessage();
    }finally{
        echo "Todo termino";
    }
?>