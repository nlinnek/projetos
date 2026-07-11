<?php
class Compra {
    private $id;
    private $itens = [];
    private $pagamento;

    public function setId($id) {
        $this->id = $id;
    }

    public function addItem(Jogo $jogo) {
        $this->itens[] = $jogo;
    }

    public function setPagamento(FormaPagamento $pagamento) {
        $this->pagamento = $pagamento;
    }

    public function mostrarCarrinho() {
        $total = 0;
        foreach ($this->itens as $item) {
            echo "Título: " . $item->getTitulo() . " - Valor: R$" . $item->getValor() . "<br>";
            $total += $item->getValor();
        }
        echo "Valor total da compra: R$" . $total . "<br>";
        echo "Forma de pagamento: ";
        $this->pagamento->pagar();
    }
}
?>
