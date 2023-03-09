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
            $nome = "luIs heNriqUe";
            $nome2 = "Luis";
            $frase = "Ola hello world mundo";
            $novo = str_pad($nome, 50, " ", STR_PAD_RIGHT); // adiciona 30 espaços após o nome

            echo strtolower($nome) . "<br><br>"; // todas minusculas
            echo strtoupper($nome) . "<br><br>"; // todas maiusculas
            echo ucfirst($nome) . "<br><br>"; // primeira letra maiscula
            echo ucfirst(strtolower($nome)) . "<br><br>"; 
            echo ucwords($nome) . "<br><br>"; // primeira letra de cada palavra maiusculas
            echo ucwords(strtolower($nome)) . "<br><br>";
            echo strrev($nome) . "<br><br>"; // string ao contrario
            echo strpos($frase, "mundo") . "<br><br>"; // mostra a posicao da palavra buscada
            echo stripos($frase, "Mundo") . "<br><br>"; // mostra a posicao da palavra buscada ignorando maiusculas ou minusculas
            echo substr_count($frase, "mundo") . "<br><br>"; // conta quantas vezes uma palavra foi encontrada
            echo substr($frase, 0, 3) . "<br><br>"; //corta um pedaço da string comecando em 0 e indo ate 3 no vetor
            echo "O $novo é maneiro" . "<br><br>";
            echo str_repeat($nome2, 3) . "<br><br>"; // repete a string 
            echo str_replace("hello", "batata", $frase) . "<br><br>"; // altera uma palavra em uma string
            echo str_ireplace("heLLo", "batata", $frase); // altera uma palavra em uma string ignorando maiusculas ou minusculas

        ?>
    </div>
</body>
</html>