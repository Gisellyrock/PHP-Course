<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
</head>
<body>
    <h1>Cadastre seu produto</h1>
    <form action="exibe.php" method="POST">
        <div>
            <label for="nome_cliente">Nome:</label>
            <input type="text" id="nome_cliente" name="nome_cliente" type="text">
        </div>
        <div>
            <label for="email_cliente">Email:</label>
            <input type="email" id="email_cliente" name="email_cliente">
        </div>
        <div>
        <label for="telefone_cliente">Telefone:</label>
            <input type="text" id="telefone_cliente" name="telefone_cliente">
        </div>
        <div>
        <div>Genero:</div>
        <div>
            <input type="radio" id="feminino" name="genero" value="feminino">
            <label for="genero">Feminino</label>
        </div>
        <div>
            <input type="radio" id="masculino" name="genero" value="masclino">
            <label for="genero">Masculino</label>
        </div>
        </div>
        <button>Cadastrar</button>
    </form>
</body>
</html>