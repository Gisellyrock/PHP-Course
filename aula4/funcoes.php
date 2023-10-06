<?php

$numero = 100;
$porcento = 20;
$porcentagem1 = calculaPorcentagem($numero, $porcento);
echo $porcentagem1;

echo '<hr>';

$valor2 = 130_000;
$porcentagem2 = $valor2 + calculaPorcentagem($valor2, 5.5);
echo $porcentagem2;



//funcao - trecho de código reaproveitável
function calculaPorcentagem(float $valor, float $porcentagem) {
    $total = $valor * ($porcentagem / 100);
    return $total;
}















