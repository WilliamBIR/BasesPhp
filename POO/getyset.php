<?php
    class Colegio{
        public $nombre;
        private $director;
        
        public function setDirector($director){
            $this->director=$director;
        }
        
        public function getDirector(){
            return $this->director;
        }
    }

    $cole1 = new Colegio();
    $cole1->nombre="San jose";
    $cole1->setDirector("Juanito");
    echo $cole1->nombre . " di" . $cole1->getDirector();
?>