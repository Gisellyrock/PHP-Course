<?php

var_dump($_POST);

//VALIDAÇÃO
//mb_strlen  => string length

if (strlen($_POST['senha']) < 8) {
    exit('Senha inválida');
}
