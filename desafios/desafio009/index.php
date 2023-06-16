<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nota1 = $_GET['v1'] ?? 0;
        $nota2 = $_GET['v2'] ?? 0;
        $peso1 = $_GET['p1'] ?? 1;
        $peso2 = $_GET['p2'] ?? 1;
        $mediaSimples = ($nota1+$nota2)/2;
        $mediaPonderada = number_format(($nota1*$peso1 + $nota2*$peso2)/($peso1 + $peso2), 2);
    ?>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" step="0.01" value="<?=$nota1?>">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" step="0.01" value="<?=$peso1?>">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" step="0.01" value="<?=$nota2?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" step="0.01" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            echo "Analizando os valores $nota1 e $nota2:";
            echo "<ul><li>A média aritmética Simples entre os valores é igual a $mediaSimples</li>
            <li>A média aritmética Ponderada entre os valores é igual a $mediaPonderada</li></ul>";
        ?>
    </section>
</body>
</html>