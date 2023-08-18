<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários Retroalimentados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Puxando os dados do formulário
        $Valor1 = $_GET['v1'] ?? 0;
        $Valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <!-- short tag para fazer o Formulário Retroalimentado-->
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
        
            <!-- Input para receber o valor 1 -->
            <label for="v1">Valor 1:</label>
            <input type="number" name="v1" id="idv1" value="<?=$Valor1?>"> <!-- Short tag para mostrar a resposta no input -->
            
            <!-- Input para receber o valor 2 -->
            <label for="v2">Valor 2:</label>
            <input type="number" name="v2" id="idv2" value="<?=$Valor2?>"> <!-- Short tag para mostrar a resposta no input -->

            <!-- Botão para processar os dados -->
            <button>Somar</button>

        </form>

    </main>

    <section id="Resultado">
            <h2>Resultado da Soma</h2>
            <?php 
                $resultado = $Valor1 + $Valor2;
                echo "A soma entre $Valor1 e $Valor2 é = <strong>$resultado</strong>";
            ?>
    </section>
</body>
</html>