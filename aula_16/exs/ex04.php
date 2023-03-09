<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <div>
        <?php
            $txt = "  Luis Henrique   ";
            $txt2[0] = "Luis";
            $txt2[1] = "Henrique";
            $letra = chr(67); // escreve uma letra pelo codigo
            $letra2 = "C";
            $cod = ord($letra2); // pega o codigo de uma letra

            $tam = strlen($txt); // tamanho da string
            $txtN = trim($txt); // tamanho da string sem espaços no inicio e fim
            $tamN = strlen($txtN);
            $qtdPal = str_word_count($txt, 0); // numero de palavras
            $exp = explode(" ", $txt); // posicao de cada palavra e espaço
            $strSpl = str_split($txt); // posicao de cada letra e espaço
            $imp = implode("#", $txt2); // une as posicoes do vetor e pode ser join também

            echo "$tam <br>";
            echo "<br>";
            echo "$tamN <br>";
            echo "<br>";
            echo "$qtdPal<br>";
            echo "<br>";
            print_r($exp);
            echo "<br>";
            echo "<br>";
            print_r($strSpl);
            echo "<br>";
            echo "<br>";
            print($imp);
            echo "<br>";
            echo "<br>";
            echo "$letra";
            echo "<br>";
            echo "<br>";
            echo "$cod";

        ?>
    </div>
</body>
</html>