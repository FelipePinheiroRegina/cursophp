<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        
        header > h1{
            color: purple;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            Operadores aritméticos em PHP
        </h1>
    </header>
    <main>
        <?php 
            $soma = "2" + "2";  // O operador de ( + ) sempre soma.
            echo "<p> \"2\" + \"2\" com o operador de + é igual á $soma do tipo int. O php não considera as aspas pois o operador +, apenas soma. </p>";
            
            $conc = "2" . "2";  // O operador de ( . ) sempre concatena.
            echo "<p> \"2\" . \"2\" com o operador de . é igual á $conc do tipo str. Pois agora sim ele está concatenando as strings. </p>";
            print "<hr>";
            
            echo "<p>+ = Soma</p> <p>- = Subtração</p> <p>* = Multiplicação</p> <p>/ = Divisão</p> <p>% = Resto da divisão</p> <p>** = Exponênciação</p>"; // O operador de Exponênciação, só funciona á partir do PHP 5.6
        ?>
    
    </main>
</body>
</html>