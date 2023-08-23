<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 012</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $seg = $_GET['seg'] ?? 0;
    ?>
    
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="seg">Quantos Segundos?</label>
            <input type="number" name="seg" id="seg" min="1" value="<?=$seg?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    
    <?php 
        $sobra = $seg;

        // Calculo quantidade de semanas
        $semanas = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;

        // Calculo quantidade de dias
        $dias = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;

        // Calculo quantidade de horas
        $horas = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;

        // Calculo quantidade de minutos
        $minutos = (int)($sobra / 60);
        $sobra = $sobra % 60;

        // Calculo quantidade de segundos
        $segundos = $sobra;

    ?>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <?=number_format($seg, 0, ".", ".")?> <strong>Segundos</strong> equivalem a um total de:</p>
        <ul>
            <!-- Quantidade de Semanas -->
            <li><strong><?=$semanas?></strong> Semanas</li>
            <!-- Quantidade de Dias -->
            <li><strong><?=$dias?></strong> Dias</li>
            <!-- Quantidade de Horas -->
            <li><strong><?=$horas?></strong> Horas</li>
            <!-- Quantidade de Minutos -->
            <li><strong><?=$minutos?></strong> Minutos</li>
            <!-- Quantidade de Segundos -->
            <li><strong><?=$segundos?></strong> Segundos</li>
        </ul>
    </section>
</body>
</html>