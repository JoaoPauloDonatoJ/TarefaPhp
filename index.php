<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sessão</title>
</head>
<body>
    <h1>Sessão</h1>
    <fieldset id="op">
        <form action="banco.php" method="post" id="sessao">
            <label>Nome: </label>
            <input type="text" name="Nome" id="Nome"> <br>
            <label>Senha: </label>
            <input type="password" name="Senha" id="Senha"> <br>
            <input type="submit" name="Enviar" value="Enviar">
        </form>
    </fieldset>
</body>
</html>