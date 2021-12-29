<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Fatorial - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $v = isset($_GET["val"]) ? $_GET["val"] : 1;
            echo "<h2>Calculando o fatorial de $v</h2>";
            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;
                $c--;
            } while ($c >= 1);
            echo "$v! = $fat "
        ?>
        <p><a href="exercicio02.html" class="botao">Voltar</a></p>
    </div>
</body>
</html>