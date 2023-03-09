<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php
            $ano = $_GET["id"];
            $idade = 2023 - $ano;
            $res = ($idade >= 18 && $idade < 65)?"Voto obrigatótio":"Não vota";
            echo "Quem nasceu em $ano tem $idade anos<br>";
            echo $res;
        ?>
    </div>
</body>
</html>