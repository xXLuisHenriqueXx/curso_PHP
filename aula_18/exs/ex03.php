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
                    0=>1,
                    1=>2,
                    2=>3,
                    3=>4,
                    4=>5,
                    5=>6);

                    unset($vet[0]);

                print_r($vet);
            ?>
        </pre>
    </div>
</body>
</html>