<?php

namespace TurimSped\Gnre\Test\Sefaz;

use PHPUnit\Framework\TestCase;

/**
 * @covers TurimSped\Gnre\Sefaz\Guia
 * @covers TurimSped\Gnre\Exception\UndefinedProperty
 */
class GuiaTest extends TestCase
{

    public function testDeveSetarOvalorAumaPropriedadeExistenteDaClasse()
    {
        $gnreGuia = new \Sped\Gnre\Sefaz\Guia();
        $gnreGuia->c01_UfFavorecida = 'SP';

        $this->assertEquals('SP', $gnreGuia->c01_UfFavorecida);
    }

    /**
     * @expectedException TurimSped\Gnre\Exception\UndefinedProperty
     * @expectedExceptionMessage Não foi possível encontrar o atributo desejado na classe
     * @expectedExceptionCode 100
     */
    public function testAcessarUmaPropriedadeQueNaoExisteNaClasse()
    {
        $gnreGuia = new \Sped\Gnre\Sefaz\Guia();
        $gnreGuia->teste = 'SP';
    }
}
