<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings em PHP</title>
</head>
<body>
    <h1>Strings em PHP</h1>
    
    <?php 
        print "<p> PHP \u{1f418} </p>"; // Double quoted
        print '<p> PHP \u{1f418} </p>'; // Single quoted
        
        print "<hr>";
        
        $nome = 'Felipe';

        echo "<p> Olá, $nome. </p>"; // aspas duplas, interpreta as variáveis.

        echo '<p> Olá, $nome. </p>'; // aspas simples, mostra exatamente como esta escrito.
        
        const estado = 'SP';
        print "<p> Moro no estado </p>"; // Para constantes, a interpretação não funciona.
        print "<p> Moro no estado de " . estado . "</p>"; // Para junção de strings com constantes, feche as aspas e em seguida coloque o . e a constante.
        print "Estamos no ano de " . date('Y'); // Para funções e constantes, coloque sempre concatenado, porque elas não funcionam dentro das doubles quoteds.
        print "<hr>";
        
        $snome = 'Pinheiro';

        print "<p> $nome \"Monstro\" $snome </p>"; // Para o php desconciderar as doubles quoteds dentro delas mesmas, é preciso colocar uma contra barra antes. se não ele vai entender como fechamento de string. (Sequência de scape)
        
        // Sequência de scape para aspas duplas ==> \n(Nova Linha)   \t(Tabulação horizontal)   \\(Barra invertida)   \$(Sinal de cifrão)   \u{}(caractere Unicode)
        
        print "<p> $nome 'Monstro' $snome </p>";
    ?>
    <hr>
    <h2>Sintaxe heredoc</h2>  
    
    <!-- A Sintaxe Heredoc interpetra tudo que esta dentro dela, e captura os espaços, as quebras de linha, do jeito que você quiser, sem precisar usar tags em php ou html. -->
    
    <?php 
        $curso = "PHP";
        $ano = date('Y');

        echo <<< Frase
            Estou estudando o curso de $curso, no ano de $ano.
        Frase;
    ?>

    <!-- A Sintaxe Nowdoc, não interpreta nada, e a saída é idêntica ao que foi escrito dentro dela. -->
    
    <h2>Sintaxe Nowdoc</h2>
    <?php 
        $curso = "PHP";
        $ano = date('Y');

        echo <<< 'Frase'
            Estou estudando o curso de $curso, no ano de $ano.
        Frase;
    ?>

</body>
</html>