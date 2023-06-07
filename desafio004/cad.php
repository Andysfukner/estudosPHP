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

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        
        
        $dolar = ($real/$cotacao);
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