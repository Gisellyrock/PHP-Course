<?php

class ContaCorrente
{
    //encapsular é não dar acesso direto a certas propriedades
    protected float $saldo;
    
    public function __construct(float $saldo)
    {
        $this->saldo =$saldo;
    }

    public function retirarSaldo(float $valor)
    {
        $this->saldo -= $valor;
    }

    public function adicionarSaldo(float $valor)
    {
        $this->saldo +=$valor;
    }

    public function consultarSaldo(): float
    {
        return $this->saldo;
    }
}


$contaCorrente = new ContaCorrente(5000);
$contaCorrente->retirarSaldo(4980);
$contaCorrente->adicionarSaldo(2000);

echo 'A Nubia está agora com: ' . $contaCorrente->consultarSaldo();