<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_REQUEST["nome"] ?? "sem nome";
            $sobre = $_REQUEST["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobre</strong>! Este é o meu site";
            //var_dump($_GET); //$_REQUEST = $_GET + $_POST + $_COOKIE
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>