<?php

namespace TurimSped\Gnre\Test\Sefaz;

use PHPUnit\Framework\TestCase;
use TurimSped\Gnre\Sefaz\boolen;

/**
 * @covers TurimSped\Gnre\Sefaz\ConsultaConfigUf
 */
class ConsultaConfigUfTest extends TestCase
{

    public function testDeveDefinirAreceitaParaSerUtilizada()
    {
        $gnreConsulta = new MinhaConsultaConfigUf();
        $this->assertNull($gnreConsulta->setReceita(100099));
    }

    public function testDeveRetornarAreceitaDefinida()
    {
        $gnreConsulta = new MinhaConsultaConfigUf();
        $gnreConsulta->setReceita(100099);

        $this->assertEquals(100099, $gnreConsulta->getReceita());
    }

    public function testDeveDefinirOestadoParaSerUtilizado()
    {
        $gnreConsulta = new MinhaConsultaConfigUf();
        $this->assertNull($gnreConsulta->setEstado('PR'));
    }

    public function testDeveRetornarOestadoDefinido()
    {
        $gnreConsulta = new MinhaConsultaConfigUf();
        $gnreConsulta->setEstado('PR');

        $this->assertEquals('PR', $gnreConsulta->getEstado());
    }

    public function testDeveDefinirOambienteParaSerUtilizado()
    {
        $gnreConsulta = new MinhaConsultaConfigUf();
        $this->assertNull($gnreConsulta->setEnvironment(1));
    }

    public function testDeveRetornarOambienteDefinido()
    {
        $gnreConsulta = new MinhaConsultaConfigUf();
        $gnreConsulta->setEnvironment(1);

        $this->assertEquals(1, $gnreConsulta->getEnvironment());
    }
}
