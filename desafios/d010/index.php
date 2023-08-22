<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $atual = date('Y');
        $nasc = $_GET['nasc'] ?? 0;
        $futuro = $_GET['futuro'] ?? $atual;
    ?>
    <main>
        <h1>Idade Futura</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <label for="nasc">Data de Nascimento: </label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual?>">
            
            <p>Coloque o ano que você deseja saber sua idade, no campo abaixo<strong> (atualmente estamos em <?=$atual?>)</strong></p>
            <label for="futuro">Ano Futuro: </label>
            <input type="number" name="futuro" id="futuro" min="1900">
            
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
            $idade = $futuro - $nasc;
        ?>
        <h2>Resposta</h2>
        <p>Em <?=$futuro?> Você vai estar com <?=$idade?> anos.</p>
    </section>
</body>
</html>