<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de login</title>
</head>
<body>
    <h1>Digite seu login</h1>
    <form action="login.php" method="POST">
       <div>
            <label>Login:</label>
            <input type="text" name="email">
        </div> 
        <div>
            <label>Senha:</label>
            <input type="password" name="senha">
        </div> 
        <button>Logar</button>
</body>
</html>