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
                $vet = range(5, 20, 5); // cria um vetor de 5 até 20 pulando de 5 em 5

                foreach($vet as $valor){
                    echo "$valor ";
                }
            ?>
        </pre>
    </div>
</body>
</html>