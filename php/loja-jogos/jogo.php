<?php
class Jogo {
    private $titulo;
    private $valor;

    public function __construct($titulo, $valor) {
        $this->titulo = $titulo;
        $this->valor = $valor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getValor() {
        return $this->valor;
    }
}
?>
