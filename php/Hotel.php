<?php
class Hotel {
    private $nome;
    private $endereço;
    private $classificação; 

    public function __construct($nome, $endereço, $classificação) {
        $this->nome = $nome;
        $this->endereço = $endereço;
        $this->classificação = $classificação;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEndereço() {
        return $this->endereço;
    }

    public function setEndereço($endereço) {
        $this->endereço = $endereço;
    }

    public function getClassificação() {
        return $this->classificação;
    }

    public function setClassificação($classificação) {
        $this->classificação = $classificação;
    }
}
?>
