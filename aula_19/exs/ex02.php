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
        <pre>
            <?php
                $vet = array(
                    0 => "A",
                    1 => "B",
                    2 => "C",
                    3 => "D"
                );
                $vet[] = "E"; //pode ser o array_push tambem
                array_pop($vet); // apaga o ultimo elemento

                array_unshift($vet, 9); // adciona um novo elemento no inicio

                array_shift($vet); // apaga o primeiro elemento

                print_r($vet);
            ?>
        </pre>
    </div>
</body>
</html>