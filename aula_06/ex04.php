<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php
            $site = "Cursoemvideo";
            $$site = "CursoPHP"; // cria uma variavel com o conteudo de $site, ou seja, uma variavel de variavel, $Cursoemvideo
            echo "A variavel site vale $site";
            echo "<br>A variavel Cursoemvideo criada a partir de site vale $Cursoemvideo";
        ?>
    </div>
</body>
</html>