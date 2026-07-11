<?php
    class Quarto {
        private $número;
        private $tipo;
        private $preço;
        private $capacidade;
        private $mobiliário = []; 
    
        public function __construct($número, $tipo, $preço, $capacidade) {
            $this->número = $número;
            $this->tipo = $tipo;
            $this->preço = $preço;
            $this->capacidade = $capacidade;
        }
    
        public function getNúmero() {
            return $this->número;
        }
    
        public function setNúmero($número) {
            $this->número = $número;
        }
    
        public function getTipo() {
            return $this->tipo;
        }
    
        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }
    
        public function getPreço() {
            return $this->preço;
        }
    
        public function setPreço($preço) {
            $this->preço = $preço;
        }
    
        public function getCapacidade() {
            return $this->capacidade;
        }
    
        public function setCapacidade($capacidade) {
            $this->capacidade = $capacidade;
        }
    
        public function addMobiliário(Mobiliário $mobiliário) {
            $this->mobiliário[] = $mobiliário;
        }
    
        public function getMobiliário() {
            return $this->mobiliário;
        }
    }
    
?>
