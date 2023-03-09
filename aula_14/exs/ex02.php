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
            function soma($a, $b){
                $s = $a + $b;
                return $s;

                // pode ser return $a + $b;
            }

            $a = 2;
            $b = 8;

            $res = soma($a, $b);
            echo "A soma entre $a e $b vale $res";
        ?>
    </div>
</body>
</html>