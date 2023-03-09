<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <div>
        <?php
            include "funcoes.php"; 
            echo "<h2>Testando funções externas<br></h2>";
            ola();
            mostraValor(5);

            //include tenta executar mesmo com erro
            //require não tenta executar com erro
            //include_once se o script ja tiver sido carregado, não carrega novamente
            //require_once se o script ja tiver sido carregado, não carrega novamente
        ?>
    </div>
</body>
</html>