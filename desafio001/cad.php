<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Resultado</h1>
    <main>
        <?php 
            $numero = $_GET["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "<p>O número escolhido foi <strong>$numero</strong>";
            echo "<p>O seu antecessor é <strong>$antecessor</strong>";
            echo "<p>O seu sucessor é <strong>$sucessor</strong>";
        ?>
    </main>
    <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </section>
</body>
</html>