<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
    <style>
        h1{
            font-family: 'Courier New', Courier, monospace;
        }
        section{
            font-size: 22px;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Funções Aritméticas
        </h1>
    </header>
    <main>
        <section>
            <?php
                // Função que calcula o número absoluto.
                $absoluto = abs(-2000);
                echo "O valor absoluto de - 2000 é $absoluto.";
                
                echo " <hr> ";
                
                // Função que converte as bases.
                $n = 254; 
                $conversaoOctal = base_convert($n, 10, 8);
                $conversaoHexa = base_convert($n, 10, 16);
                $conversaoBi = base_convert($n, 10, 2);
                
                echo "<p> O número $n na base Octal( 8 ), é $conversaoOctal. </p>";
                
                echo "<p> O número $n na base Hexadecimal( 16 ), é $conversaoHexa. </p>";

                echo "<p> O número $n na base Binaria( 2 ), é $conversaoBi.</p>";

                echo " <hr> ";

                // Funções de arredondamento.
                $numero = 5.4;
                echo "<p> O número é $numero </p>";
                echo "<p> Arredondando para cima = " . ceil($numero) . "</p>";
                echo "<p> Arredondando para baixo = " . floor($numero) . "</p>";
                echo "<p> Arredondando normal = " . round($numero) . "</p>";

                echo " <hr> ";

                // Função que calcula a hipotenusa.
                $hipot = hypot(4, 5);
                echo "Calculando a hipotenusa do cateto A = 4 e B = 5 você terá $hipot";

                echo " <hr> ";
                
                // Função que retorna o número inteiro da divisão.
                $n1 = 5;
                $n2 = 2;
                echo "Usando a funçao intdiv, retorna o número inteiro da divisão de $n1 por $n2, você terá = " . intdiv(5, 2);

                echo " <hr> ";

                // Função que calcula o min e o max de um número.
                $max = max(5, 2);
                $min = min(5, 2);
                echo "O Máximo entre 5 e 2 é $max, e o Mínimo é $min.";

                echo " <hr> ";

                // Função e Constante que calcula o PI.
                $fpi = pi();
                $cpi = M_PI;
                echo " Utilizando a função pi() temos $fpi, Utilizando a constante M_PI temos $cpi.";

                echo " <hr> ";

                // Função para calcular o expoente, porém você perderá a precedência.
                $pot = pow(5, 2);
                echo "A 5 elevado a 2 é $pot.";

                echo " <hr> ";

                // Função sin(), cos(), tan().
                
                // Função para calcular a raiz quadrada.
                $raiz = sqrt(81);
                $raizz = 81 ** (1/2);
                echo "<p> A raiz quadrada de 81 é $raiz </p>";
                echo "<p> A raiz quadeada de 81 é $raizz </p>";
            ?>
        </section>
    </main>
</body>
</html>