<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET['numero'];
        $raizQuadrada = number_format(sqrt($num), 2);
        $raizCubica = number_format($num**(1/3), 2);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$num?>" step="0.01">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "<p>Analisando o número $num temos: </p>";
            echo "<ul><li>A sua raíz quadrada é: $raizQuadrada</li>
            <li>A sua raíz cúbica é: $raizCubica</li></ul>";
        ?>
    </section>
</body>
</html>