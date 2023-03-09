<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php
            $num1 = 3;
            $num2 = "3";

            $res1 = ($num1 == $num2)?"Sim":"Não";
            $res2 = ($num1 === $num2)?"Sim":"Não";
            echo "As variaveis A e B são iguais? $res1<br>";
            echo "As variaveis A e B são identicas? $res2";
        ?>
    </div>
</body>
</html>