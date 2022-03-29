<?php
    interface Cuenta{
        const moneda= "pesos";
        public function asignarSaldo($saldo);
        
        public function calcularinteres();
        
        public function mostrarsaldo();
        
    }
    
    class CuentaAhorro implements Cuenta{
        
        private $saldo;
        public function asignarSaldo($saldo) {
         $this->saldo=$saldo;
    }

        public function calcularinteres() {
        $interes=$this->saldo*.05;
        echo $interes . "<br/>";
    }

        public function mostrarsaldo() {
        echo "saldo en tu cuenta: ".$this->saldo." ".Cuenta::moneda."<br/>";
    }
    }
    $cueA=new CuentaAhorro();
    $cueA-> asignarSaldo(15000);
    $cueA->calcularinteres();
    $cueA->mostrarsaldo();
?>