<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Declarando o salário mínimo de acordo com o M_edge 2023
        $salariominimo = 1_320.00;
        
        // Requisição para saber o salário do usuário
        $salario = $_GET["salario"] ?? 1_320.00;

        // Fazendo a divisão inteira do salário / salário mínimo
        $qtdSalario = intdiv($salario, $salariominimo);

        // Pegando o resto da divisão
        $restante = $salario % $salariominimo;
    ?>
    <main>
        <!-- Título do Desafio -->
        <h1>Salário Mínimo</h1>

        <!-- Usando uma short tag para tornar o formulário retroalimentado -->
        <form action="<?=$_SERVER["PHP_SELF"];?>" method="get">
            
            <!-- Pedindo para o usuário entrar com o salário -->
            <label for="salario">Salário R$: </label>
            <input type="number" name="salario" id="salario" step="0.001" value="<?=$salario?>">
            
            <!-- Paragrafo formatado para a moeda do brasil -->
            <p>Considerando um salário mínimo <strong>R$<?=number_format($salariominimo, 2, ",", ".")?></strong></p>
            
            <input type="submit" value="Verificar">
            
        </form>
    </main>
    <section>
        <h1>Calculando...</h1>
        <?php 
            echo "<p>Quem ganha <strong>R\$". number_format($salario, 2, ",", "."). "</strong>, recebe $qtdSalario Salários Mínimos + <strong>R\$". number_format($restante, 2, ",", ".").".</strong></p>";
        ?>
    </section>
</body>
</html>