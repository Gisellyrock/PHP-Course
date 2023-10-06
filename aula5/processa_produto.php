<?php
//receber os dados de uma página

//Super Globais de captura de campos
//$_GET ou $_POST


//$_GET["nome_produto"]


echo 'Nome do produto: ' . $_GET['nome_produto'];
echo '<br>';
echo 'Preco do produto: ' . $_GET['preco_produto'];
echo '<br>';
echo 'Categoria: ' . $_GET['categoria_produto'];