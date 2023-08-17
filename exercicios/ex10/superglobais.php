<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globais</title>
    
</head>
<body>
    <main>
        <pre>
            <?php
                // setando a para super global COOKIE
                setcookie("dia-da-semana", "Segunda", time() + 3600);

                //setando a super global SESSION
                $_SESSION["teste"] = "FUNCIONOU!";

                // Conhecendo a Super Global $_GET
                echo "<h1>Super Global GET</h1>";
                var_dump($_GET);

                // Conhecendo a Super Global $_POST
                echo "<h1>Super Global POST</h1>";
                var_dump($_POST);

                // Conhecendo a Super Global $_REQUEST
                echo "<h1>Super Global REQUEST</h1>";
                var_dump($_REQUEST);

                // Conhecendo a Super Global $_COOKIE
                echo "<h1>Super Global COOKIE</h1>";
                var_dump($_COOKIE);

                // Conhecendo a Super Global $_SESSION
                echo "<h1>Super Global SESSION</h1>";
                var_dump($_SESSION);

                // Conhecendo a Super Global $_SERVER
                echo "<h1>Super Global SEVER</h1>";
                var_dump($_SERVER);

                // Conhecendo a Super Global $GLOBALS
                echo "<h1>Super Global GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>