<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <div>
        <?php
            $txt = "Texto gigante para textar a função wordwrap bla bla bla bla bla lero lero lero lero.";
            
            $res = wordwrap($txt, 8, "<br />\n", false); // gera quebras de linha
            echo $res;
        ?>
    </div>
</body>
</html>