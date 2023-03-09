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
            $vet[0] = 1;
            $vet[1] = 2;
            $vet[2] = 3;

            print_r($vet); //printa o vetor
            echo "<br>";
            var_dump($vet);
            echo "<br>";
            var_export($vet);

            echo "<br>";

            $vet2 = array(1, 2, 3, 4, 5);

            print_r($vet2);

        ?>
    </div>
</body>
</html>