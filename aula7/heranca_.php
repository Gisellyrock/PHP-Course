<?php
class ContaCorrente
{
    protected float $saldo;
    public string $nome;

    public function __construct(float $saldo) 
   {
        $this->saldo = $saldo;
   }

    public function adcionaSaldo(float $saldo)
    {
        $this->saldo += saldo;
    }

    public function retirarSaldo(float $saldo)
    {
        $this->saldo -= $saldo;
    }
}

class ContaCorrentePF extends ContaCorrente
{
    public string $cpf;
}

class ContaCorrentePJ
{
    public string $cnpj;
    protected float $lis = 10_000;

//polimorfismo / sobrescrita (E NAO SOBRECARGA)
    public function retirarSaldo(float $saldo)
    {
        if ($this->saldo === 0) {
            $this->lis -= $saldo;
        } else {
            $this->saldo -= $saldo;
        }
    }
}




$contaPF = new ContaCorrentePF(2000);
$contaPF->cpf = '333.333.333-33';
$contaPF->adicionarSaldo(200);

$contaPJ = new ContaCorrentePF(2000);
$contaPJ->cnpj = '23.333.333/0001-33';
$contaPJ->adicionarSaldo(200);
