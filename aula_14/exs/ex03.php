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
            function soma(){
                $dados = func_get_args(); // pega os parametros
                $tot = func_num_args(); // pega o numero de parametros
                $soma = 0;

                for ($i=0; $i < $tot; $i++) { 
                    $soma += $dados[$i];
                }

                return $soma;
            }

            $res = soma(1, 4, 7, 2, 3, 5, 10);
            echo "A soma vale $res";
        ?>
    </div>
</body>
</html>