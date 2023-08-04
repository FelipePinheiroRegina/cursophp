<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando tags</title>
</head>
<body>
    <h1 style="color: purple;">Testando tags</h1>
    <?php 
        echo "<p>Felipe Pinheiro, (super tag php)</p>";
    ?> 
    
    <? 
        echo "<p>Felipe Pinheiro, (short open tag)</p>";
    ?> 
    
    <?php echo "<p>Felipe Pinheiro</p>" ?>   <!-- Tag Version long !--> 
    <?= "Felipe Pinheiro, (short tag php)" ?> <!-- Tag Version short !--> 
    <br>
    <br>
    <h1 style="color: purple;">Testando data / hora</h1>
    <?php
        date_default_timezone_set("America/Sao_paulo"); // Colocando horário UTC
        echo "Hoje é dia" . date(" D / M / Y"); // Maiúsculo mostra por letras
        echo "<br>";
        echo "Hoje é dia" . date(" d / m / y"); // Minúsculo mostra múmeros
        echo "<br>";
        echo "Agora são" . date(" G : i : s");
    ?>
    
</body>
</html>