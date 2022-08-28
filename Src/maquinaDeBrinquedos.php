<?php

namespace Src;

class maquinaDeBrinquedos
{
    private $brinquedos = 0;

    public function getBrinquedos()
    {
        return $this->brinquedos;
    }

    public function setBrinquedos($quantidade)
    {
        $this->brinquedos = $quantidade;
    }

    public function girar()
    {
        $this->setBrinquedos($this->getBrinquedos() - 1);
    }
}