<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = &$a; // liga as variaveis A e B referenciadas, por conta do &
            $b += 5;
            echo "A variavel A vale $a";
            echo "<br>A variavel B vale $b"
        ?>
    </div>
</body>
</html>