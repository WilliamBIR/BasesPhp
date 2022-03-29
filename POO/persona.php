<?php
    class Persona{
        public $apellidos;
        public $nombres;
        public $edad;
        
        function saludar (){
            echo "Hola <br/>";
        }
    }
    
    //Instancia de la clase persona
    /*
    $per1= new Persona();
    $per1->apellidos="Gunzals";
    $per1->nombres="guwa";
    $per1->edad=25;
    
    echo $per1->apellidos . "<br/>";
    echo $per1->edad . "<br/>";
    
    $per1->saludar();
    */
?>