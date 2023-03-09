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
            $esc = $_GET["op"];
            $num1 = $_GET["a"];
            $num2 = $_GET["b"];

            echo "Os valores recebidos foram $num1 e $num2 <br>";
            $res = ($esc == "s")?$num1+$num2:$num1*$num2;
            echo $res;
        ?>
    </div>
</body>
</html>