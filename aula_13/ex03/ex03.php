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
            $num = isset($_GET["num"])?$_GET["num"]:0;
            $cont = 0;

            for ($i = 1; $i <= $num; $i++){
                if ($num % $i == 0) {
                    $cont++;
                }
            }
            if ($cont == 2) {
               $res = "O número $num é PRIMO";
            } else {
                $res = "O número $num não é PRIMO";
            }
            echo "<h2>$res</h2>";
        ?>
        <br>    
        <a href="ex03.html">Voltar</a>
    </div>
</body>
</html>