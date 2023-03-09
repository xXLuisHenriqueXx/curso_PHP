<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="../estilo.css">
    <style>
        span.est{
            color: green;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $estado = isset($_GET["estado"])?$_GET["estado"]:0;
            
            switch($estado){
                case 'RS':
                case 'SC':
                case 'PR': 
                    echo "Você mora na <span class='est'>REGIÃO SUL</span>";
                    break;

                case 'SP':
                case 'RJ':
                case 'ES':
                case 'MG':
                    echo "Você mora na <span class='est'>REGIÃO SUDESTE</span>";
                    break;

                case 'MS':
                case 'GO':
                case 'MT':
                    echo "Você mora na <span class='est'>REGIÃO CENTRO-OESTE</span>";
                    break;

                case 'BA':
                case 'PI':
                case 'SE':
                case 'AL':
                case 'PE':
                case 'PB':
                case 'RN':
                case 'CE':
                case 'MA':
                    echo "Você mora na <span class='est'>REGIÃO NORDESTE</span>";
                    break;

                case 'TO':
                case 'PA':
                case 'AP':
                case 'RR':
                case 'AM':
                case 'AC':
                case 'RO':
                    echo "Você mora na <span class='est'>REGIÃO NORTE</span>";
                    break;
                
                default:
                    echo "Estado não informado";
            }
        ?>
        <br>    
        <a href="ex03.html">Voltar</a>
    </div>
</body>
</html>