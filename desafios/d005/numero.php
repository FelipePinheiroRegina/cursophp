<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta 005</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            // requisição do formulário de html
            $num = $_GET["n"] ?? 0;
            echo "<header><h1>Número analisado ". number_format($num, 3, ",", ".")."...</h1></header>";

            // Pegando a parte inteira do número
            $int = (int)$num;
            
            // Pegando a fração do número
            $frac = $num - $int;

            echo "<article><p>A parte inteira do número analisado é <mark>". number_format($int, 0, ",", ".")."</mark></p>";
            echo "<br>";
            echo "<p>A parte fracionada do número analisado é <mark>". number_format($frac, 3, ",", ".")."</mark></p>";
        ?>
    </main>
</body>
</html>