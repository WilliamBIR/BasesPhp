<?php
    session_start();
    
    $valor1= $_SESSION["valor1"];
    $persona= json_decode($_SESSION["persona"],true);
    /*
     * Si esta en tru es un arreglo asociativo
     * Si esta en false es un objecto y hay que manejarlo como tal
     * echo $persona->nombres . "<br/>
     */
    echo $persona["nombres"] . "<br/>";
    echo $valor1 . "<br/>";
    $_SESSION["valor2"]= "asdklñjf";
    echo "<a href='pagina3.php'>Ir a la pagina 3</a>";
?>
