<?php
    require_once './persona.php';

class estudiante extends Persona {
    public $numcursos;
}
    $per1 = new estudiante();
    $per1->apellidos="Gunzals";
    $per1->nombres="guwa";
    $per1->numcursos=25;
    
    echo $per1->apellidos . "<br/>";
    echo $per1->numcursos . "<br/>";
    
    $per1->saludar();
?>