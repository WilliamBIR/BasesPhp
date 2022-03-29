<?php
    class Persona implements jsonSerializable{
        public $nombres;
        public function __construct($nom){
            $this->nombres=$nom;
        }
        public function jsonSerialize(){
            return get_object_vars($this);
        }
    }
    
    $per=new Persona ("TG Maelstrom");
    session_start(); //Iniciando una sesion.
    $_SESSION["valor1"] = 130;
    $_SESSION["persona"]= json_encode($per);
    echo "<a href='pagina2.php'> Ir a la pagina 2 </a>";
     
?>