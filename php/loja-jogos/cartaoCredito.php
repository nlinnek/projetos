<?php
class CartaoCredito implements FormaPagamento {
    private $limite;

    public function setLimite($limite) {
        $this->limite = $limite;
    }

    public function pagar() {
        echo "Compra aprovada no cartão de crédito.<br>";
    }
}
?>
