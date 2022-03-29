<?php
require_once './persona.php';

class docente extends Persona {
    public $sueldo;
}
    $per1 = new docente();
    $per1->apellidos="Gunzals";
    $per1->nombres="guwa";
    $per1->sueldo=25;
    
    echo $per1->apellidos . "<br/>";
    echo $per1->sueldo . "<br/>";
    
    $per1->saludar();

