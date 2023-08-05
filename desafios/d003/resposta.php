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
                Dolar Hoje U$4,87
            </h1>
        </header>
        <article>
            <?php 
                // Puxando o name 'reais' do formulário.
                $reais = $_GET["reais"] ?? 0;  
                
                // U$1(UM) Dolar no dia 05/08/2023 estava R$4,87
                $dolar = $reais / 4.87; 
                
                //echo "<p> Você entrou com R$" . number_format($reais, 2, ",", ".") . "<br> Esse valor convertido para dolar, fica U$" . number_format($dolar, 2, ",", ".") . "</p>";  
                
                // number_format para formatar os valores.
                // 1° Parametro = valor da variavel. 
                // 2° Parametro = numeros de casas decimais. 
                // 3° Parametro = separador de decimal. 
                // 4° Parametro = separador de milhar.

                // Formatação de moedas com intercionalização
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "Você entrou com o valor " .numfmt_format_currency($padrao, $reais, "BRL") . "<br>convertido para dorlar " .numfmt_format_currency($padrao, $dolar, "USD") . "<br>";
            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
            
        </article>
    </main>
</body>
</html>