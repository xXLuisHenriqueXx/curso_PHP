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
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
            $ano = isset($_GET["ano"])?$_GET["ano"]:0;
            
            $idade = date("Y") - $ano;
            
            if($idade >= 18 && $idade < 65){
                $vote = "vota!";
                $diri = "pode dirigir";
            } else {
                $vote = "não vota!";
                $diri = "não pode dirigir";
            }

            echo "$nome tem $idade anos, sendo assim, $diri e $vote";
        ?>
        <br>    
        <a href="ex01.html">Voltar</a>
    </div>
</body>
</html>