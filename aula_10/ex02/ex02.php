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
            $dia = isset($_GET["dia"])?$_GET["dia"]:0;
            
            switch($dia){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Estuda!";
                    break;

                case 7:
                case 1:
                    echo "Não estuda!";
                    break;

                default:
                    echo "Dia não informado!";
            }
        ?>
        <br>    
        <a href="ex02.html">Voltar</a>
    </div>
</body>
</html>