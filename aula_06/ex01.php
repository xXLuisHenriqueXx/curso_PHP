<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php
            $num = $_GET["a"];
            echo "O preço do produto é R$" . number_format($num,2,",",".");
            $num += $num * (10 / 100);
            echo "<br>O preço com o aumento de 10% aplicado é R$" . number_format($num,2,",",".");
            $num = $_GET["a"];
            $num -= $num * (10 / 100);
            echo "<br>O preço com o desconto de 10% aplicado é R$" . number_format($num,2,",",".");
        ?>
    </div>
</body>
</html>