<?php
   class Reserva {
    private $dataInicio;
    private $dataFim;
    private $status;
    private $quarto; 
    private $hóspede;

    public function __construct($dataInicio, $dataFim, $status, Quarto $quarto, Hóspede $hóspede) {
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        $this->status = $status;
        $this->quarto = $quarto;
        $this->hóspede = $hóspede;
    }

    public function getDataInicio() {
        return $this->dataInicio;
    }

    public function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    public function getDataFim() {
        return $this->dataFim;
    }

    public function setDataFim($dataFim) {
        $this->dataFim = $dataFim;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getQuarto() {
        return $this->quarto;
    }

    public function getHóspede() {
        return $this->hóspede;
    }
}

?>
