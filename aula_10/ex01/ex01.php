<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
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
            $num = isset($_GET["num"])?$_GET["num"]:0;
            $selec = isset($_GET["op"])?$_GET["op"]:0;
            
            switch($selec){
                case 'dobro':
                    $resulta = $num * 2;
                    break;

                case 'cubo':
                    $resulta = pow($num, 3);
                    break;

                case 'raizq':
                    $resulta = sqrt($num);
                    break;

                default:
                    $resulta = "Operação não informada!";
            }
            echo "O numero recebido foi: $num <br>";
            echo "A operação escolhida foi: $selec <br>";
            echo "O resultado é: $resulta";
        ?>
        <br>    
        <a href="ex01.html">Voltar</a>
    </div>
</body>
</html>