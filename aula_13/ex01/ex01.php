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
            for ($i = 1; $i <= 10; $i++) { 
                echo "$i ";
            }
            echo "<br>";
            for ($i = 10; $i >= 1; $i--) { 
                echo "$i ";
            }
            echo "<br>";
            for ($i = 0; $i <= 50; $i+=5) { 
                echo "$i ";
            }
            echo "<br>";
            for ($i = 20; $i >= 10; $i-=2) { 
                echo "$i ";
            }
        ?>
        <br>    
    </div>
</body>
</html>