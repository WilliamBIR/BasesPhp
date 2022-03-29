<?php
    
    class Curso{
        public $nombre;
        private $docente;
        /*
         * public: Posible modificar y utilizar propiedad en todo el script
         * 
         * private Solo usable en los metodos de la clase a la que pertenece
         * 
         * protected Solo usable en la clase a la que pertenece y sus descendientes
         * 
         * final no podra ser reescrita por sus descendientes
         * 
         * abstract para ser usado, debe heredarse primero
         * 
         */
        public function __construct($nombre,$docente) {
            $this->nombre=$nombre;
            $this->docente=$docente;
        }
        
        function mencionardocente(){
            echo "Docente: " . $this->docente;
        }
    }
    
    $cur1= new Curso(nombre:"programacion", docente:"William B");
    
    echo $cur1->nombre . "es impartido por: ";
    $cur1->mencionardocente();

?>