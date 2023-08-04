<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta 001</title>
</head>
<body>
    <main>
        <header>
            <h1>Resposta 001</h1>
        </header>
        <article>
            <?php 
                $numero = $_GET["numero"];
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;

                echo "<p> Você entrou com o número <strong>$numero.</strong> </p>";
                echo "<p> O seu Antecessor é <strong> $antecessor. </strong></p>";
                echo "<p> O seu Sucessor é <strong> $sucessor. </strong> </p>";

            ?>
        </article>
    </main>
</body>
</html>