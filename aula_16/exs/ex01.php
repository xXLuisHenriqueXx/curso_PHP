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
            $prod = "Salgadinho";
            $valor = 5.4;

            printf("O valor do %s é R$%.2f", $prod, $valor);

        ?>
    </div>
</body>
</html>