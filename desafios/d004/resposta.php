<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta 003</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
            <h1>
                Conversor de Moedas 2.0
            </h1>
        </header>
        <article>
            <?php 
                // Puxando o name 'reais' do formulário.
                $reais = $_GET["reais"] ?? 0;  
                
                // URL do Banco Central do Brasil ==> Dados Abertos / Dolar Comercial / Dolar por periodo
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'08-09-2023\'&@dataFinalCotacao=\'08-15-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                
                // Tratando com Json a url
                $dados = json_decode(file_get_contents($url), true);

                // Pegando a cotação do Array
                $cotação = $dados["value"][0]["cotacaoCompra"];

                // Convertendo Reais em Dolar
                $dolar = $reais / $cotação;
            
                // Formatação de moedas com intercionalização
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "Você entrou com o valor " .numfmt_format_currency($padrao, $reais, "BRL") . "<br>convertido para dorlar " .numfmt_format_currency($padrao, $dolar, "USD") . "<br>";
            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
            
        </article>
    </main>
</body>
</html>