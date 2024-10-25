<?php

require_once("IConsumidor.php");

class Residencial implements IConsumidor {
    private $consumoResidencial;

    public function getValorFatura() {
        return $this->consumoResidencial * 1.05;
    }

    

    /**
     * Get the value of consumoResidencial
     */
    public function getConsumoResidencial()
    {
        return $this->consumoResidencial;
    }

    /**
     * Set the value of consumoResidencial
     */
    public function setConsumoResidencial($consumoResidencial): self
    {
        $this->consumoResidencial = $consumoResidencial;

        return $this;
    }
}
