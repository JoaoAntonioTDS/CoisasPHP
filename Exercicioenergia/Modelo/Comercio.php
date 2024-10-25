<?php

require_once("IConsumidor.php");

class Comercial implements IConsumidor {
    private $consumoComercial;

    public function getValorFatura() {
        if ($this->consumoComercial <= 100) {
            return $this->consumoComercial * 1.45;
        } else {
            return (100 * 1.45) + (($this->consumoComercial - 100) * 1.60);
        }
    }

    

    /**
     * Get the value of consumoComercial
     */
    public function getConsumoComercial()
    {
        return $this->consumoComercial;
    }

    /**
     * Set the value of consumoComercial
     */
    public function setConsumoComercial($consumoComercial): self
    {
        $this->consumoComercial = $consumoComercial;

        return $this;
    }
}

