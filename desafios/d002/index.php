<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <header>
            <h1>Sorteando um número</h1>
        </header>
        <article>
            <?php 
                $min = 0;
                $max = 100;
                $numGerado = mt_rand($min, $max);

                echo "<p> 
                        Gerando um número gerado entre 0 e 100. 
                    
                        <br> 
                    
                        O número gerado foi <strong>$numGerado.</strong>
                    </p>"
            ?>
            <button onclick="javascript:window.location.reload()">Gerar Outro</button>
        </article>
    </main>
</body>
</html>