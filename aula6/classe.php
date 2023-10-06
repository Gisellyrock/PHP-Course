<?php

//convenções
class UmaClasse extends stdClass
{
    //propriedades = variáveis
    public string $atributo1;

    protected int $idade;
    //ações / métodos
    public function umaAcao(string $nome): array
    {
        //uma acao aqui
        return[];
    }
}


class Aposta
{
    public float $valor;
    public string $nomeJogo;
    public array $numeros;
}

//criar as variáveis para guardar os dados da aposta
//new - por que é uma nova aposta - instancicao - criar a classe de modo físico.
$aposta = new Aposta();
$aposta->valor = 203.00;
$aposta->nomeJoso = 'Mega Sena';
$aposta ->numeros = [2, 3, 67, 23, 98, 23];

$aposta2 = new Aposta();
$aposta->valor = 15.00;
$aposta->nomeJoso = 'Duplinha';
$aposta ->numeros = [98, 23];

var_dump($aposta, $aposta2);