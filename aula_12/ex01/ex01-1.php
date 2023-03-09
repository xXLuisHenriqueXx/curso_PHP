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
            $i = 0;
            
            do{
                echo "$i <br>";
                $i += 2;
            }while($i <= 20);
        ?>
        <br>    
    </div>
</body>
</html>