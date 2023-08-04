<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões aritméticas</title>
    <style>
        h1, h2{
            color: green;
            font-family: 'Courier New', Courier, monospace;
        }

        h3{
            color: red;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Expressões Aritméticas
        </h1>
    </header>
    <main>
        <?php 
            $expressão = 5 + 2 / 2;
            echo "<p> A expressão 5 + 2 / 2 vai ter como resultado $expressão, pois a divisão tem mais precedência e por isso ela é resolvida primeiro. </p>";

            print "<hr>";
            print "<h2> Ordem de precedência </h2>";
            print "<p> De cima para baixo, da esquerda para a direita. </p>";
            print "<h2> 1. ( ) </h2>"; // se a expressão estiver entre parênteses, ela é resolvida primeiro.
            print "<p> 2. ** </p>";
            print "<p> 3. * / % </p>";
            print "<p> 4. + - </p>";
            print "<hr>";

            print "<h2> Mais Exemplos </h2>";
            $resp = 50 / 2 + 3 ** 2;
            echo "<p> A expressão 50 / 2 + 3 ** 2 é igual á $resp, sabendo a ordem de precedência, fica fácil saber o porque. </p>";
            $respp = 50 / (2 + 3) ** 2;
            echo "<p> Agora a mesma expressão com parênteses, ficará assim 50 / ( 2 + 3 ) ** 2 é igual á $respp.";
            echo "<h3>O parênteses faz total diferença na expressão, fique atento. </h3>";
            
            
        ?>
    </main>
</body>
</html>