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
        <pre>
            <?php
                $vet = array(
                    0 => "A",
                    1 => "B",
                    2 => "C",
                    3 => "D"
                );
                echo count($vet) . " elementos <br>";
                print_r($vet);
                var_dump($vet);
            ?>
        </pre>
    </div>
</body>
</html>