<?php

function soma($valor1, $valor2) {
    return $valor1 + $valor2;
}

function titulo(string $titulo) {
    return "<h1>$titulo</h1>";
}


function input(string $nome, string $label) {
    return "
    <div>
    <label for='$label'>$label</label>
    <input id='$label' type='text' name='$nome'>
    </div>
    ";
}
