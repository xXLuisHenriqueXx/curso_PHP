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
        <pre>
            <?php
                $user = array(
                    "id" => 1,
                    "nome" => "Luis",
                    "idade" => 19,
                );
                $user["peso"] = 55; // adiciona novo campo

                /*foreach($user as $k => $c){
                    echo "O campo $k possui o conteúdo $c<br>";
                }*/
                print_r($user);
            ?>
        </pre>
    </div>
</body>
</html>