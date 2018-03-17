<?php
use PHPUnit\Framework\TestCase;

class ContaComumTest extends TestCase
{
    private $contaComum; 

    public function setUp()
    {
       $this->contaComum = new ContaComum(10.00);    
    }

    public function testDeveExibirSaldoAtual()
    {
        $this->assertEquals(10.00, $this->contaComum->getSaldo());
    }        

    public function testDeveDepositarDezReaisNaConta()
    {
        $this->assertEquals(20.00, $this->contaComum->deposita(10.00));
    }        

    public function testDeveSacarCincoReais()
    {
        $this->contaComum->deposita(10);
        
        $this->assertEquals(15.00, $this->contaComum->saca(05.00));
    }

    public function testDeveSacarMaisQueOSaldoAtual()
    {
        $this->expectException(InvalidArgumentException::class);

        $this->assertEquals(15.00, $this->contaComum->saca(50.00));        
    }

    public function testDeveRender()
    {
        $this->assertEquals(11.00, $this->contaComum->render());
    }
}