<?php
  class Mobiliário {
    private $tipo;
    private $descrição;

    public function __construct($tipo, $descrição) {
        $this->tipo = $tipo;
        $this->descrição = $descrição;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getDescrição() {
        return $this->descrição;
    }

    public function setDescrição($descrição) {
        $this->descrição = $descrição;
    }
}

?>
