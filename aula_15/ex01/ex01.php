<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <div>
        <?php
            function valorPassagem($a){ // não altera o valor de x
                $a += 2;
            }
            function valorReferencia(&$a){ // altera o valor de x, por conta do &
                $a += 2;
            }   

            $x = 3;

            valorPassagem($x);
            echo "Valor passagem: $x <br>";

            valorReferencia($x);
            echo "Valor referência: $x"

        ?>
    </div>
</body>
</html>