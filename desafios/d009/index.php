<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ?? 1;
        $p1 = $_GET['p1'] ?? 1;
        $v2 = $_GET['v2'] ?? 1;
        $p2 = $_GET['p2'] ?? 1;

        $ma = ($v1 + $v2) / 2;
        $mp = ($v1 * $p1 + $v2 * $p2)/($p1 + $p2);
    ?>
    <main>
        <h1>Média Aritmética & Média Ponderada</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="v1">Valor 1: </label>
            <input type="number" name="v1" id="v1" required>
            <label for="p1">Peso 1: </label>
            <input type="number" name="p1" id="p1" required>
            <label for="v2">Valor 2: </label>
            <input type="number" name="v2" id="v2" required>
            <label for="p2">Peso 2: </label>
            <input type="number" name="p2" id="p2" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>As médias entre <?=$v1?> e <?=$v2?></p>
        <p>Média Aritmética <?=$ma?></p>
        <p>Média Ponderada <?=$mp?></p>
    </section>
</body>
</html>