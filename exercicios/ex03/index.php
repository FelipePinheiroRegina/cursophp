<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 20</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1 style="color: purple;">Variáveis e constantes</h1>
    <?php 
        $nome = "Felipe";
        $sobrenome = "Pinheiro";
        const PAIS = "Brasil";
        echo "Olá $nome $sobrenome, você mora no " . PAIS; // Uma constante não pode ser alterada.
    ?>
    <h2>Regras em PHP</h2>
    <ol>
        <li>Variáveis sempre começam com símbolo ( $ ).</li>
        <li>O segundo pode ser letra ou símbolo _.</li>
        <li>Aceita caracteres [ a - z ], [ A - Z ], [ 0 - 9 ] e [ _ ].</li>
        <li>Aceita caratcteres da tabela ASCII a partir de 128.</li>
        <li>Aceita caracteres acentuados como á, õ, ç.</li>
        <li>A Linguagem é <strong>case sensitive</strong> em relação aos nomes.</li>
        <li>Nomes especiais como $this não podem ser usados.</li>
    </ol>
    <hr>
    <h2>Recomendações em declaração de variáveis e constantes em PHP</h2>
    <ul>
        <li>Tente nomes claros e de fácil identificação.</li>
        <li>Evite nomes muito curto ou muito longo.</li>
        <li>Defina um padrão e siga em todo o projeto.</li>
        <li>Para variáveis, dê preferência a letras minúsculas.</li>
        <li>Para constantes, dê preferência a letras maiúsculas.</li>
        <li>Use camelCase para métodos e atributos.</li>
        <li>Use SNAKE_CASE para nomear constantes.</li>
    </ul>
    <hr>
    <h3>Exemplos</h3>
    <?php 
        $nomeCompletoCliente = "Camel Case";
        $telefone_contato_fornecedor = "Snake Case";
        print "$nomeCompletoCliente <br>";
        echo "$telefone_contato_fornecedor";
    ?>
</body>
</html>