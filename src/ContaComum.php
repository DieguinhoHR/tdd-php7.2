<?php
declare(strict_types=1);

class ContaComum 
{
    private $saldo;

    public function __construct(float $saldo)
    {
        $this->saldo = $saldo;  
    }

    public function getSaldo() : float
    {
        return $this->saldo;            
    }      

    public function deposita(float $valor) : float
    {
        return $this->saldo += $valor;
    } 

    public function saca(float $valor) : float
    {
        if ($valor <= $this->saldo) {
            return $this->saldo -= $valor;
        }
        throw new InvalidArgumentException('valor invállido: '.$valor);
    }

    public function render() : float
    {
        return $this->saldo * 1.1;    
    }
}