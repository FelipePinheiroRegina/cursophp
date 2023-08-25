<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .notas{
            height: 50px;
        }
    </style>
</head>
<body>
    <?php 
        // Puxando quanto o usuário quer sacar
        $saque = $_GET['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
            <p style="font-size: 0.9em;">Notas Disponíveis <strong>(R$100,00 | R$50,00 | R$10,00 | R$5,00)</strong></p>
            <label for="saque">Valor do Saque <strong>(R$)</strong></label>
            <input type="number" name="saque" id="saque" required step="5" value="<?=$saque?>">

            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        // Criando a variavel (sobra) para trabalhar com o valor
        $sobra = $saque;

        // Calculo para saber quantas notas de R$100
        $tot100 = floor($sobra / 100);
        $sobra %= 100;
        
        // Calculo para saber quantas notas de R$50
        $tot50 = floor($sobra / 50);
        $sobra %= 50;
        
        // Calculo para saber quantas notas de R$10
        $tot10 = floor($sobra / 10);
        $sobra %= 10;
        
        // Calculo para saber quantas notas de R$5
        $tot5 = floor($sobra / 5);
        $sobra %= 5;



    ?>
    <section>
        <h2>
            Valor do Saque R$<?=number_format($saque, 2, ",", ".")?>
        </h2>
        <p>
            O Caixa eletrônico te fornecerá as seguintes cédulas abaixo:
        </p>
        
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de R$100" class="notas">x<?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de R$50" class="notas">x<?=$tot50?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de R$10" class="notas">x<?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de R$5" class="notas">x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>