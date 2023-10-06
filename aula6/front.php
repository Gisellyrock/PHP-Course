<?php
//carrega o aruivo reutilizacao no arquivo atual;
require'reutilizacao.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?=titulo('Meu formulário')?>
    
    <form action="teste.php">
    <?=input('nome', 'Nome: ')?>
    <?=input('email', 'Email: ')?>
    <?=input('telefone', 'Telefone: ')?>
    <button>Enviar</button>    
</form>
</body>
</html>