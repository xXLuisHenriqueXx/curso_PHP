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
            $i = 1;
            
            while($i <= 5){
                $v = "num" . $i;
                $url = "v" . $i;
                
                $$v = isset($_GET[$url])?$_GET[$url]:0;
                $i++;
            }

            $i = 1;

            while($i <= 5){
                $v = "num" . $i;
                echo "Valor $i: " . $$v . "<br>";
                $i++;
            }
        ?>
        <a href="ex02-1.php">Voltar</a> 
    </div>
</body>
</html>