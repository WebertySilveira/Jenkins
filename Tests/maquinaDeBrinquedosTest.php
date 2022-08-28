<?php

use PHPUnit\Framework\TestCase;

use Src\maquinaDeBrinquedos;

class maquinaDeBrinquedosTest extends TestCase
{
    public $maquinaDeBrinquedos;

    public function testFuncionamentoDoGiro()
    {
        $this->maquinaDeBrinquedos = new maquinaDeBrinquedos();
        $this->maquinaDeBrinquedos->setBrinquedos(10);
        $this->maquinaDeBrinquedos->girar(5);
        $this->assertEquals(
            9,
            $this->maquinaDeBrinquedos->getBrinquedos()
        );
    }
}