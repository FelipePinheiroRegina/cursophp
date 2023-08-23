<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $produto = $_GET['preço'] ?? 0;
        $porcentagem = $_GET['reaj'] ?? 0;

        // Calculo de porcentagem
        $preçonovo = ($produto * $porcentagem) / 100;
    ?>

    <main>
        <h1>Reajuste de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <!-- Input para receber o preço do produto -->
            <label for="preço">Preço do produto: </label>
            <input type="number" name="preço" id="preço" step="0.01" value="<?=$produto?>">
            
            <!-- Input para receber a porcentagem que o usuário deseja aumentar -->
            <label for="reaj">Qual será o percentual de reajuste? <strong>(<span id="p">?</span>%)</strong></label> 
            
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaPorcentagem()">

            <input type="submit" value="Calcular Reajuste">
        </form>
    </main>
    <section>
        <h2>Novo preço</h2>
        <p>Com <strong>(<?=$porcentagem?>%)</strong> de aumento o produto que custa <strong>R$<?=number_format($produto, 2, ",", ".")?></strong> vai passar a valer <strong>R$<?=number_format($produto + $preçonovo, 2, ",", ".")?></strong></p>
    </section>
    
    <!-- script em JS para mostrar na tela a porcentagem de acordo com o usuário mexendo no input range -->
    <script>
        mudaPorcentagem()
        
        function mudaPorcentagem(){
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>