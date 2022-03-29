<?php

    //Trata de buscar el archivo, pero puede continuar sin el
    //include './funciones/includemetodos.php'; 

    //Si no encuentra el archivo, se produce un error
    require './funciones/includemetodos.php';
    
    include_once './funciones/includemetodos.php';
    
    require_once './funciones/includemetodos.php';
    echo sumar(6,12) . "<br/>";

?>