<?php
class Boleto implements FormaPagamento {
    private $diasParaExecucao;

    public function setDiasParaExecucao($dias) {
        $this->diasParaExecucao = $dias;
    }

    public function pagar() {
        echo "Boleto pago. Deve ser executado em {$this->diasParaExecucao} dias.<br>";
    }
}
?>
