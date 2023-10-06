<?php

$alunas = [
    'Carla',
    'Amanda',
    'Luciana',
    'Mariana',
    'Mara',
    'Lais'
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando uma lista de clientes</title>
</head>
<body>
    
<h1>Lista de Alunas</h1>

<select>
 <?php

    foreach ($alunas as $aluna) {
        echo "<option>$aluna</option>";
    }

?>
</select>

</body>
</html>