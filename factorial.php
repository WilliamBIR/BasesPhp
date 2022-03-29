<?php
    function factorial($numero){
        $factorial=1;
        $contador=1;
        while($contador<=$numero){
            $factorial*=$contador;
            $contador++;
        }
        return $factorial;
    }
    
    for ($i=1;$i<5;$i++){
        echo "Factorial de " . $i . "es " . factorial($i) . "<br/>";
    }
?>