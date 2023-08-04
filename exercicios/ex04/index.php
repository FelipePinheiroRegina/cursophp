<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Tipos primitivos em PHP</h1>
    <h2>Escalares</h2>
    <?php 
        $num = 0x1A;  // sempre que começa com 0x em php, é um número da base hexadecimal.
        
        $num = 0b1011; // sempre que começa com 0b em php, é um número da base binaria.
        
        $num = 010;  // sempre que começa com 0 em php, é um número da base octal. 
        print "O valor da variável é $num";
    ?>
    <hr>
    <?php 
        $n = 300;
        var_dump($n); // Mostra o tipo e o valor.
        echo "<br>";
        $nn = 45.2;
        var_dump($nn);
        echo "<br>";
        $nnn = true;
        var_dump($nnn);
        echo "<br>";
        $nome = "Felipe";
        var_dump($nome)
    ?>
    <hr>
    <?php 
        $numero = 3e2; // é igual á 3 x 10, elevado a 2.
        print "o número é $numero";
        echo "<br>";
        $tipo = (string) 500; // tipando a variável 
        var_dump($tipo);
        echo "<br>";
        $verdadeiro = true;
        $falso = false;
        print "Variável Booleana e True em PHP é $verdadeiro, já a False é $falso, [Vazio]."
    ?>
    <hr>
    <h2>Compostos</h2>
    <?php 
        $vet = [2, 4, 6, 8]; // array
        var_dump($vet);
        
        echo "<br>";

        class Pessoa {  // Object
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p)

    ?>
</body>
</html>