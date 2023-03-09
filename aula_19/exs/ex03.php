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
        <pre>
            <?php
                $vet = array(
                    0 => 4,
                    1 => 2,
                    2 => 1,
                    3 => 3
                );
                sort($vet); //ordena
                print_r($vet);

                rsort($vet); //ordena de forma reversa
                print_r($vet);

                asort($vet); // ordena os indices tambem
                print_r($vet);

                arsort($vet); // ordena os indices tambem de forma reversa
                print_r($vet);

                //ksort coloca os indices em ordem
            ?>
        </pre>
    </div>
</body>
</html>