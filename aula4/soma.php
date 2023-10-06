<?php

function media($valor1, $valor2) {
    $soma = $valor1 + $valor2;
    $resultado = $soma / 2;
    return $resultado;
}

$a = 10;
$b = 15;

$media = media($a, $b);
echo $media;

?>