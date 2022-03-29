<?php
    //Estructura if
    $edad=21;
    $otrodato=15;
    if($edad>18 && $otrodato==10){
        echo "Es mayor de edad";
    }
    else{
        echo"No se cumplen condiciones";
    }
    echo "<br/>";
    
    
    //Estructura While
    $contador=1;
    while($contador<10){
        echo $contador . "<br/>";
        $contador++;
    }
    
    //Estructura Do While
    //Siempre se ejecuta al menos una vez
    $contador2=1;
    do{
        echo "Cumple";
    }while($contador2>5);
    
    //Ciclo for
    for($i=0;$i<10;$i++){
        echo $i . "<br/>";
    }
    
    //For each
    
    $matriz=array("a","b","c","d");
    foreach($matriz as $valor){
        echo $valor . "<br/>";
    }
    
    
    //Switch
    
    $valor=1;
    switch($valor){
        case 1:
            echo "Es uno";
            break;
        case 2:
            echo "Es dos";
            break;
        default:
            echo "Blabla";
            break;
    }
?>