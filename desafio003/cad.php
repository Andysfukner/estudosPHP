<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas</h1>
    <main>
        <?php 
        $real = $_GET["quantia"];
        $dolar = ($real/4.96);
        //echo '<p>R$'.number_format($result,2,",",".").' equivalem a U$'.number_format($dolar,2,",",".") ."</p>"; 
        //Maneira básica sem API
         

        //Formatação com internacionalização!

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo '<p>'.numfmt_format_currency($padrao, $real, "BRL").' equivalem a U$'.numfmt_format_currency($padrao, $dolar, "USD")."</p>"
        ?>
    </main>
    <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </section>
</body>
</html>