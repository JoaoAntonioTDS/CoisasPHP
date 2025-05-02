<?php
class Palpite {
    public $nome;
    public $imagem;
    public $dica;

    public function __construct($nome, $imagem, $dica) {
        $this->nome = $nome;
        $this->imagem = $imagem;
        $this->dica = $dica;

    }
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of imagem
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     */
    public function setImagem($imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get the value of dica
     */
    public function getDica()
    {
        return $this->dica;
    }

    /**
     * Set the value of dica
     */
    public function setDica($dica): self
    {
        $this->dica = $dica;

        return $this;
    }
}

