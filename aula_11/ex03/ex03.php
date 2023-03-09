<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <div>
        <?php
            $inicio = isset($_GET["ini"])?$_GET["ini"]:0;
            $fim = isset($_GET["fim"])?$_GET["fim"]:0;
            $incre = isset($_GET["inc"])?$_GET["inc"]:0;
            $teste = $fim - $inicio;
            
            if(($inicio <= $fim) && !($teste < $incre)){
                while($inicio <= $fim){
                    echo "$inicio <br>";
                    $inicio += $incre;
                }
            } else {
                echo "Os valores digitados são inválidos!";
            }
        ?>
        <br>    
        <a href="ex03.html">Voltar</a>
    </div>
</body>
</html>