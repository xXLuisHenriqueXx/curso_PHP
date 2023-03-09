<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $n = 19;
            $no = (string) "Luis";
            echo $no . " tem " . $n . " anos!<br>"; 
            echo "$no tem $n anos!" // tem o mesmo resultado
            // echo '$no tem $n anos!' // as aspas devem ser duplas, senão gera erro
        ?>
    </div>
</body>
</html>