<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <div>
        <?php
            $num = isset($_GET["num"])?$_GET["num"]:0;
            echo "<h2>Mostrando a tababuada do $num</h2>";

            for ($i = 1; $i <= 10; $i++){
                echo "$num x $i = " . ($num * $i) . "<br>";
            }
        ?>
        <br>    
        <a href="ex02.html">Voltar</a>
    </div>
</body>
</html>