<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Fazendo uma requisição pelo metedo get, para puxar os dados -->
    <?php
            // Requisição para puxar o dividendo
            $dividendo = $_GET['dividendo'] ?? 0;
            
            // Requisição para puxar o divisor
            $divisor = $_GET['divisor'] ?? 1;

            // Usando a função (intdiv) para pegar o número inteiro da divisão
            $quociente = intdiv($dividendo, $divisor);
            
            // Usando o módulo( % ) para pegar o resto da divisão
            $resto = $dividendo % $divisor;
        ?>
    
    <main> 
        <!-- Título do Desafio -->
        <h1>Anatomia da Divisão</h1>
        
        <!-- Retro alimentando o desafio com essa linha abaixo -->
        <form action="<?=$_SERVER["PHP_SELF"];?>" method="get">
            <!-- Pedindo o dividendo através do formulário -->
            <label for="dividendo">Dividendo: </label>
            <input type="number" name="dividendo" id="iddividendo" value="<?=$dividendo?>">
            
            <!-- Pedindo o divisor através do formulário -->
            <label for="divisor">Divisor: </label>
            <input type="number" name="divisor" id="iddivisor" min="1"value="<?=$divisor?>">

            <!-- Botão para enviar os dados para o servidor -->
            <input type="submit" value="Dividir">
        </form>
    </main>

    <section>
        <h1>Resultado da Divisão</h1>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>