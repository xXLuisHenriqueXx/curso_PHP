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
        $valor = $_GET["v"];
        $quad = pow($valor,2);
        $raizq = sqrt($valor);

        echo "O valor digitado foi $valor <br>";
        echo "O quadrado do mesmo é " . number_format($quad,2,",",".");
        echo "<br>A raiz quadrada é " . number_format($raizq,2,",",".");
    ?>
    <br>
    <a href="ex01.html">Voltar</a>
    </div>
</body>
</html>