<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Requisição para pegar o número do formulário
        $num = $_GET['num'] ?? 0;
        
        // Calculando a raiz quadrada
        $raizQuadrada = $num ** (1/2);

        // Calculando a raiz cubica
        $raizCubica = $num ** (1/3);
    ?>
    <main>
        <h1>Raízes</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Entre com um número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h1>Resultado</h1>
        <p>A Raiz Quadrada do <strong><?=$num?></strong>, é <strong><?=$raizQuadrada?></strong></p>
        <p>A Raiz Cubica do <strong><?=$num?></strong>, é <strong><?=$raizCubica?></strong></p>
    </section>
</body>
</html>