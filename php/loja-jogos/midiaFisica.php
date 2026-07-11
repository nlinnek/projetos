<?php
class MidiaFisica extends Jogo {
    private $frete;

    public function setFrete($frete) {
        $this->frete = $frete;
    }

    public function getFrete() {
        return $this->frete;
    }

    public function getValor() {
        return parent::getValor() + $this->frete;
    }
}
?>
