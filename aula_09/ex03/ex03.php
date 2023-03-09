<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="../estilo.css">
    <style>
        span.situacao{
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $nota1 = isset($_GET["num1"])?$_GET["num1"]:0;
            $nota2 = isset($_GET["num2"])?$_GET["num2"]:0;
            
            $media = ($nota1 + $nota2) / 2;
            
            if($media >= 7){
                $sit = "APROVADO";
            } else {
                $sit = "REPROVADO";
            }

            echo "A media entre " . number_format($nota1, 1, ",") . " e ". number_format($nota2, 1, ",") . " é " . number_format($media, 1, ",") . ".";
            echo "<br>Situação do aluno: <span class='situacao'>$sit</span>!";
        ?>
        <br>    
        <a href="ex03.html">Voltar</a>
    </div>
</body>
</html>