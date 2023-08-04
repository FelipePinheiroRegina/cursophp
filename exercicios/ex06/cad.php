<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // A Super Global $REQUEST, é a junção da $GET $POST $COOKIES
            
            $nome = $_GET["nome"] ?? "Sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";

            echo "<p>Muito prazer em te conhecer, <mark>$nome $sobrenome</mark>, seja bem-vindo(a)!";
            echo "<p> Este é meu site!<P>"
        ?>
        <a href="javascript:history.go(-1)">Voltar á pagina inicial</a>
    </main>
</body>
</html>