<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $text = isset($_GET["t"])?$_GET["t"]:"Texto genérico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 </title>
    <link rel="stylesheet" href="../estilo.css">
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$text</span>";
        ?>
        <br>    
        <a href="ex03.html">Voltar</a>
    </div>
</body>
</html>