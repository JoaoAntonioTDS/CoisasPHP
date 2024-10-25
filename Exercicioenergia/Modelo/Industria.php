<?php

require_once("IConsumidor.php");

class Industrial implements IConsumidor {
    private $consumoIndustrial;

    public function getValorFatura() {
        if ($this->consumoIndustrial <= 500) {
            return $this->consumoIndustrial * 1.80;
        } else {
            return (500 * 1.80) + (($this->consumoIndustrial - 500) * 2.30);
        }
    }

    

    /**
     * Get the value of consumoIndustrial
     */
    public function getConsumoIndustrial()
    {
        return $this->consumoIndustrial;
    }

    /**
     * Set the value of consumoIndustrial
     */
    public function setConsumoIndustrial($consumoIndustrial): self
    {
        $this->consumoIndustrial = $consumoIndustrial;

        return $this;
    }
}


