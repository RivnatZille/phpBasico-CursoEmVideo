<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 - strpos - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");
            echo "A string foi encontrada na posição $pos";
        ?>
        <!-- <p><a href="#" class="botao">Voltar</a></p> -->
    </div>
</body>
</html>