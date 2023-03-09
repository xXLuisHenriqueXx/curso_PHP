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
        <form method=get action="ex02-2.php">
            <?php
                $i = 1;
            
                while($i <= 5){
                    echo "valor $i: <input type='number' name='v$i' max='100' min='0' value='0'><br>";
                    $i++;
                }
            ?>
            <input type="submit" value="Enviar">  
        </form>
    </div>
</body>
</html>